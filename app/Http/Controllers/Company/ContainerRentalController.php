<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\ContainerRental;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContainerRentalController extends Controller
{

    protected $data = [
        'page_title' => 'إيجار الحاويات',
        'create' => 'إضافه إيجار',
        'edit' => 'تعديل إيجار',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_container-rentals'])->only(['index', 'data']);
        $this->middleware(['permission:create_container-rentals'])->only(['create', 'store']);
        $this->middleware(['permission:update_container-rentals'])->only(['edit', 'update']);
        $this->middleware(['permission:delete_container-rentals'])->only(['destroy', 'bulkDelete']);
    }

    public function index()
    {
        return view('company.container_rentals.index', ['data' => $this->data]);
    }

    public function data()
    {
        $rentals = ContainerRental::get();
        $model = 'container-rentals';
        return DataTables::of($rentals)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('model', 'raw'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->make(true);


    }//end of data function


    public function create()
    {
        return view('company.container_rentals.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
