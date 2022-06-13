<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\TruckRequest;
use App\Models\Truck;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TruckController extends Controller
{

    use ResponseTrait;

    protected $data = [
        'page_title' => 'الشاحنات',
        'create' => 'إضافه شاحنه',
        'edit' => 'تعديل شاحنه',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_trucks'])->only(['index', 'data']);
        $this->middleware(['permission:create_trucks'])->only(['create', 'store']);
        $this->middleware(['permission:update_trucks'])->only(['edit', 'update']);
        $this->middleware(['permission:delete_trucks'])->only(['destroy', 'bulkDelete']);
    }

    public function data()
    {
        $trucks = auth()->user()->company->trucks;
        $model = 'trucks';
        return DataTables::of($trucks)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('model', 'raw'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->addColumn('branch', function ($raw) {
                return $raw->branch->name;
            })
            ->addColumn('driver', function ($raw) {
                return $raw->driver->name;
            })
            ->make(true);


    }//end of data function

    public function index()
    {
        return view('company.trucks.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = auth()->user()->company->branches;
        $drivers = auth()->user()->company->drivers;
        return view('company.trucks.create', ['data' => $this->data], compact('branches', 'drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TruckRequest $request)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;
        Truck::create($data);
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
    public function edit(Truck $truck)
    {
        $branches = auth()->user()->company->branches;
        $drivers = auth()->user()->company->drivers;
        return view('company.trucks.edit', ['data' => $this->data], compact('truck', 'branches', 'drivers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TruckRequest $request, Truck $truck)
    {
        $data = $request->validated();
        $truck->update($data);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Truck $truck)
    {
        $truck->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);
        Truck::destroy($ids['items']);
        return $this->setDeletedSuccess();
    }//end of bulkDelete function
}
