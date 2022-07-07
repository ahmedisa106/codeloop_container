<?php

namespace App\Http\Controllers\Api\Employee\Messenger;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContainerRentalResource;
use App\Http\Resources\ContainerResource;
use App\Models\Container;
use App\Models\ContainerRental;
use App\Models\Contract;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ContainerRentalController extends Controller
{
    use ApiResponse;

    public function __construct()
    {
        $this->middleware('auth:employee_api');
    }//end of __construct function

    public function getContainer(Request $request)
    {
        $containers = Container::query()->join('companies', 'containers.company_id', '=', 'companies.id')
            ->where('containers.category_id', $request->category_id)
            ->where('containers.category_size_id', $request->category_size_id)
            ->where('containers.status', 'available')
            ->where('containers.branch_id', auth('employee_api')->user()->branch->id)
            ->select('containers.*')
            ->get();


        $containers = ContainerResource::collection($containers);
        return $this->setStatus('success')->setCode(200)->setData($containers)->send();


    }//end of getContainer function

    public function getContainerRentals(Request $request)
    {
        $rentals = ContainerRental::query()->join('companies', 'container_rentals.company_id', '=', 'companies.id')
            ->select('container_rentals.*')
            ->where('container_rentals.messenger_id', auth('employee_api')->user()->id);

        if (isset($request->status)) {
            $rentals = clone $rentals->where('container_rentals.status', $request->status)->get();
        } else {
            $rentals = $rentals->get();
        }

        $rentals = ContainerRentalResource::collection($rentals);
        return $this->setStatus('success')->setCode(200)->setData($rentals)->send();

    }//end of getContainerRentals function

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contract_type' => 'required|in:cash,contract',
            'area_name' => 'required_if:contract_type,contract|string',
            'area_number' => 'required_if:contract_type,contract|string',
            'block_number' => 'required_if:contract_type,contract|string',
            'plan_number' => 'required_if:contract_type,contract|string',
            'category_id' => 'required|exists:categories,id',
            'category_size_id' => 'required|exists:category_sizes,id',
            'customer_id' => 'required|exists:customers,id',
            'customer_address_id' => 'required|exists:customer_addresses,id',
            'container_id' => 'required|exists:containers,id',
            'discharge_price' => 'required|numeric',
            'discharge_number' => 'required|integer',
            'discount' => 'required|min:0',
            'total' => 'required|min:0|gte:0',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_at',
        ], [], [
            'contract_type' => 'نوع التعاقد',
            'contract_id' => 'رقم العقد',
            'category_id' => 'التصنيفات',
            'category_size_id' => 'حجم التصنيف',
            'customer_id' => 'العميل',
            'customer_address_id' => 'عنوان العميل',
            'container_id' => ' رقم الحاوية',
            'discharge_price' => 'سعر التفريغ',
            'discharge_number' => 'عدد التفريغات',
            'discount' => 'الخصم',
            'total' => 'الإجمالي بعد الخصم',
            'start_at' => 'التاريخ من',
            'end_at' => 'التاريخ الي',
            'messenger_id' => 'المندوب',
            'area_name' => 'إسم الحي',
            'area_number' => 'رقم القطعه',
            'block_number' => 'رقم البلوك',
            'plan_number' => 'رقم المخطط',
        ]);

        if ($validator->fails()) {

            return $this->setStatus('Error')->setCode(400)->setData($validator->errors()->first())->send();
        }
        $data = $validator->validated();
        $data['company_id'] = auth()->user()->company->id;
        $data['remaining_discharges'] = $data['discharge_number'];
        $data['messenger_id'] = $data['messenger_id'] ?? auth()->user()->id;
        $contract_data = ['area_name' => $data['area_name'], 'area_number' => $data['area_number'], 'block_number' => $data['block_number'], 'plan_number' => $data['plan_number']];
        unset($data['area_name'], $data['area_number'], $data['block_number'], $data['plan_number']);


        DB::beginTransaction();


        $rent = ContainerRental::create($data);


        $rent->container->update(['status' => 'notAvailable']);


        $number = $this->getLatestContractSerial();


        if ($data['contract_type'] == 'contract') {
            //$file_name = time() . '_' . $number . '.pdf';
            $rent->contract()->create([
                'contract_serial' => $number,
                'company_id' => $rent['company_id'],
                'customer_id' => $rent['customer_id'],
                'messenger_id' => $rent['messenger_id'],
                'qr' => '',
                //'pdf' => $file_name,
                'area_name' => $contract_data['area_name'],
                'area_number' => $contract_data['area_number'],
                'block_number' => $contract_data['block_number'],
                'plan_number' => $contract_data['plan_number']
            ]);
            $rent->contract()->update([
                'qr' => QrCode::size(100)->generate(route('contracts.pdf', $rent->contract->id))
            ]);
        }

        DB::commit();

        $rent = new  ContainerRentalResource($rent);

        return $this->setStatus('success')->setCode(200)->setMessage('تمت الإضافه بنجاح')->setData($rent)->send();

    }//end of tests function

    public function getLatestContractSerial()
    {
        $serial = Contract::where('company_id', auth()->user()->company->id)->latest()->first();
        if (!$serial) {
            return 1;
        } else {
            return $serial->contract_serial + 1;
        }
    }//end of getLatestContractSerial function

    public function assignDriverToDrive(Request $request)
    {
        $rent = ContainerRental::find($request->container_rental_id);
        $rent->update(['driver_id' => $request->driver_id]);
        $driver = Employee::find($request->driver_id);
        $driver->update(['status' => 'inactive']);
        $driver->requests()->create([
            'container_rental_id' => $rent->id,
            'type' => 'delivery',
            'status' => 'waiting_approval'
        ]);

        return $this->setStatus('success')->setCode(200)->setMessage('تم تعيين سائق بنجاح')->send();
    }//end of assignDriverToDrive function

    public function assignDriverToDischarge(Request $request)
    {
        $rent = ContainerRental::find($request->container_rental_id);
        $rent->update(['driver_id' => $request->driver_id]);
        $driver = Employee::find($request->driver_id);
        $driver->update(['status' => 'inactive']);
        $driver->requests()->create([
            'container_rental_id' => $rent->id,
            'type' => 'discharge',
            'status' => 'waiting_approval'
        ]);

        return $this->setStatus('success')->setCode(200)->setMessage('تم تعيين سائق بنجاح')->send();
    }//end of assignDriverToDischarge function

}
