<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'الخدمات',
        'create' => 'إضافة خدمة جديد',
        'edit' => 'تعديل خدمة',
    ];

    public function data()
    {

        $services = Service::get();
        $model = 'services';
        return DataTables::of($services)
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

    public function index()
    {
        return view('admin.pages.services.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.services.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data ['photo'] = $this->upload($request->photo, 'services');
        }
        Service::create($data);
        return $this->setAddedSuccess();
    }


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
    public function edit(Service $service)
    {
        return view('admin.pages.services.edit', ['data' => $this->data], compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data ['photo'] = $this->upload($request->photo, 'services', true, $service->photo);
        }
        $service->update($data);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $items);

        Service::destroy($items['items']);

        return $this->setDeletedSuccess();


    }//end of bulkDelete function
}
