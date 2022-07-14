<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Models\Package;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PackageController extends Controller
{
    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'الباقات',
        'create' => 'إضافة باقة',
        'edit' => 'تعديل باقة',
    ];

    public function index()
    {
        return view('admin.pages.packages.index', ['data' => $this->data]);
    }


    public function data()
    {
        $packages = Package::get();
        $model = 'packages';
        return DataTables::of($packages)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('admin.includes.check_item', compact('raw'));
            })
            ->addColumn('status', function ($raw) use ($model) {
                return view('admin.includes.status_btn', compact('raw', 'model'));
            })
            ->addColumn('photo', function ($raw) {
                return '<img src="' . $raw->image . '">';
            })
            ->addColumn('period', function ($raw) {
                if ($raw->period == 1) {
                    $period = 'شهر';
                } elseif ($raw->period == 2) {
                    $period = 'شهران';
                } elseif ($raw->period > 10) {
                    $period = $raw->period . ' شهراً ';
                } else {
                    $period = $raw->period . ' أشهر ';
                }
                return $period;
            })
            ->rawColumns(['photo' => 'photo'])
            ->make(true);

    }//end of data function

    public function create()
    {
        return view('admin.pages.packages.create', ['data' => $this->data]);
    }


    public function store(PackageRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload($request->photo, 'packages');
        }
        $data['status'] = $request->status ?? 'inactive';
        Package::create($data);
        return $this->setAddedSuccess();
    }


    public function show($id)
    {
        //
    }


    public function edit(Package $package)
    {
        return view('admin.pages.packages.edit', ['data' => $this->data], compact('package'));
    }


    public function update(PackageRequest $request, Package $package)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload($request->photo, 'packages', true, $package->photo);
        }
        $data['status'] = $request->status ?? 'inactive';
        $package->update($data);
        return $this->setUpdatedSuccess();
    }


    public function destroy(Package $package)
    {
        $package->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $items);
        Package::destroy($items['items']);
        return $this->setDeletedSuccess();
    }//end of bulkDelete function


    public function getPackage(Request $request)
    {
        $package = Package::findOrFail($request->package_id, ['id', 'period', 'price']);
        return response()->json(['data' => $package], 200);
    }//end of getPackage function

    public function updateStatus(Request $request, $id)
    {
        Package::findOrFail($id)->update(['status' => $request->status]);
        return $this->setUpdatedSuccess();
    }//end of updateStatus function
}
