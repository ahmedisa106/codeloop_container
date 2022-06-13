<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategorySizeRequest;
use App\Models\CategorySize;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategorySizeController extends Controller
{
    use ResponseTrait;

    protected $data = [
        'page_title' => 'أحجام التصنيفات',
        'create' => 'إضافه حجم لتصنيف',
        'edit' => 'تعديل حجم تصنيف',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_category-sizes'])->only('index', 'data');
        $this->middleware(['permission:create_category-sizes'])->only('create', 'store');
        $this->middleware(['permission:update_category-sizes'])->only('edit', 'update');
        $this->middleware(['permission:delete_category-sizes'])->only('destroy', 'bulkDelete');
    }

    public function data()
    {
        $category_sizes = CategorySize::where('company_id', auth()->user()->company->id)->get();
        $model = 'category-sizes';
        return DataTables::of($category_sizes)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->addColumn('category_id', function ($raw) {

                return $raw->category->name;
            })
            ->make(true);

    }//end of data function

    public function index()
    {
        return view('company.settings.categories.category_sizes.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = auth()->user()->company->categories;
        return view('company.settings.categories.category_sizes.create', ['data' => $this->data], compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorySizeRequest $request)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;
        CategorySize::create($data);
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
    public function edit(CategorySize $categorySize)
    {
        $categories = auth()->user()->company->categories;
        return view('company.settings.categories.category_sizes.edit', ['data' => $this->data], compact('categories', 'categorySize'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorySizeRequest $request, CategorySize $categorySize)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;
        $categorySize->update($data);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorySize $categorySize)
    {
        $categorySize->delete();
        return $this->setDeletedSuccess();

    }

    public function bulkDelete(Request $request)
    {

        parse_str($request->ids, $ids);
        CategorySize::destroy($ids['items']);
        return $this->setDeletedSuccess();

    }//end of bulkDelete function
}
