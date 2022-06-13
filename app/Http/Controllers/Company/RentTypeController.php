<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\RentTypeRequest;
use App\Models\RentType;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RentTypeController extends Controller
{
    use ResponseTrait;

    protected $data = [
        'page_title' => 'أنواع الإيجار',
        'create' => ' إضافه نوع إيجار',
        'edit' => 'تعديل نوع إيجار',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_rent-types'])->only('index', 'data');
        $this->middleware(['permission:create_rent-types'])->only('create', 'store');
        $this->middleware(['permission:update_rent-types'])->only('edit', 'update');
        $this->middleware(['permission:delete_rent-types'])->only('destroy', 'bulkDelete');
    }

    public function data()
    {
        $types = auth()->user()->company->rentTypes;
        $model = 'rent-types';
        return DataTables::of($types)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('raw', 'model'));

            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->make(true);

    }//end of data function

    public function index()
    {
        return view('company.settings.rent_types.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.settings.rent_types.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RentTypeRequest $request)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;

        RentType::create($data);


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
    public function edit(RentType $rentType)
    {
        return view('company.settings.rent_types.edit', ['data' => $this->data], compact('rentType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RentTypeRequest $request, RentType $rentType)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;

        $rentType->update($data);
        return $this->setDeletedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentType $rentType)
    {
        $rentType->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);
        RentType::destroy($ids['items']);
        return $this->setDeletedSuccess();
    }//end of bulkDelete function
}
