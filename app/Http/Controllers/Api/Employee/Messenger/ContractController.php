<?php

namespace App\Http\Controllers\Api\Employee\Messenger;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContractResource;
use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    use ApiResponse;

    public function __construct()
    {
        $this->middleware('auth:employee_api');
    }//end of __construct function

    public function getContracts()
    {
        $contracts = $contracts = Contract::query()->join('companies', 'contracts.company_id', '=', 'companies.id')
            ->where('contracts.messenger_id', auth('employee_api')->user()->id)
            ->select('contracts.*')
            ->get();

        $contracts = ContractResource::collection($contracts);
        return $this->setStatus('success')->setCode(200)->setData($contracts)->send();

    }//end of getContracts function

    public function show(Request $request)
    {
        $contract = Contract::find($request->id);

        if (!$contract) {
            return $this->setStatus('Error')->setCode(401)->setMessage('للأسف لايوجد بيانات')->send();
        }
        $contract = new ContractResource($contract);
        return $this->setStatus('success')->setCode(200)->setData($contract)->send();
    }//end of show function

    public function search(Request $request)
    {
        $contracts = Contract::query()->join('companies', 'contracts.company_id', '=', 'companies.id')
            ->select('contracts.*')
            ->where('contracts.status', $request->status)
            ->get();
        $contracts = ContractResource::collection($contracts);
        return $this->setStatus('success')->setCode(200)->setData($contracts)->send();
    }//end of show function
}
