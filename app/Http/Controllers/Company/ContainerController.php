<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContainerRequest;
use App\Models\Category;
use App\Models\Container;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContainerController extends Controller
{

    use ResponseTrait;

    protected $data = [
        'page_title' => 'الحاويات',
        'create' => 'إضافه حاويه',
        'edit' => 'تعديل حاويه',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_containers'])->only(['index', 'data']);
        $this->middleware(['permission:create_containers'])->only(['create', 'store']);
        $this->middleware(['permission:update_containers'])->only(['edit', 'update']);
        $this->middleware(['permission:delete_containers'])->only(['destroy', 'bulkDelete']);
    }//end of __construct function

    public function data()
    {
        $containers = auth()->user()->company->containers;
        $model = 'containers';
        return DataTables::of($containers)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->addColumn('branch', function ($raw) {
                return $raw->branch->name;
            })
            ->addColumn('category', function ($raw) {
                return $raw->category->name;
            })
            ->make(true);


    }//end of data function

    public function index()
    {
        return view('company.containers.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = auth()->user()->company->categories;
        $branches = auth()->user()->company->branches;
        return view('company.containers.create', ['data' => $this->data], compact('branches', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContainerRequest $request)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;
        $data['status'] = $request->status ?? 'inactive';
        Container::create($data);

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
    public function edit(Container $container)
    {
        $categories = auth()->user()->company->categories;
        $branches = auth()->user()->company->branches;
        return view('company.containers.edit', ['data' => $this->data], compact('branches', 'container', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContainerRequest $request, Container $container)
    {
        $data = $request->validated();
        $data['status'] = $request->status ?? 'inactive';


        $container->update($data);

        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Container $container)
    {
        $container->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);
        Container::destroy($ids['items']);
        return $this->setDeletedSuccess();

    }//end of bulkDelete function

    public function getCategorySizes(Request $request)
    {
        $categorySizes = Category::find($request->id)->sizes;

        return $this->setData($categorySizes);
    }//end of getCategorySizes function
}
