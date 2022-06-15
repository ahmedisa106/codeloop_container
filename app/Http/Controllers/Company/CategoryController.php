<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    use ResponseTrait;

    protected $data = [
        'page_title' => 'التصنيفات',
        'create' => 'إضافه تصنيف',
        'edit' => 'تعديل تصنيف',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_categories'])->only('index', 'data');
        $this->middleware(['permission:create_categories'])->only('create', 'store');
        $this->middleware(['permission:update_categories'])->only('edit', 'update');
        $this->middleware(['permission:delete_categories'])->only('destroy', 'bulkDelete');
    }

    public function data()
    {
        $categories = auth()->user()->company->categories;
        $model = 'categories';
        return DataTables::of($categories)
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
        return view('company.settings.categories.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.settings.categories.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;

        Category::create($data);
        return $this->setAddedSuccess()->setData(['model' => 'categories']);

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
    public function edit(Category $category)
    {
        return view('company.settings.categories.edit', ['data' => $this->data], compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;

        $category->update($data);
        return $this->setUpdatedSuccess();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {

        parse_str($request->ids, $ids);
        Category::destroy($ids['items']);

        return $this->setDeletedSuccess();
    }//end of bulkDelete function

    public function getCategorySizes(Request $request)
    {
        $categorySizes = Category::find($request->id)->sizes;
        return $this->setData($categorySizes);
    }//end of getCategorySizes function

    public function getCategories()
    {
        $categories = auth()->user()->company->categories;
        return $this->setData($categories);
    }//end of getCategories function
}
