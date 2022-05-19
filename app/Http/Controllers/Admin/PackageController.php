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
        'create' => 'إضافه باقه',
        'edit' => 'تعديل باقه',
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
            ->addColumn('photo', function ($raw) {
                return '<img src="' . $raw->image . '">';
            })
            ->rawColumns(['photo' => 'photo'])
            ->make(true);

    }//end of data function

    public function create()
    {
        return view('admin.pages.packages.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload($request->photo, 'packages');
        }
        Package::create($data);
        return $this->setAddedSuccess();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('admin.pages.packages.edit', ['data' => $this->data], compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequest $request, Package $package)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload($request->photo, 'packages', true, $package->photo);
        }
        $package->update($data);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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
}
