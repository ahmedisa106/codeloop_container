<?php

namespace App\Http\Controllers\Api\Employee\Messenger;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    use ApiResponse;

    public function __construct()
    {
        $this->middleware('auth:employee_api');
    }//end of __construct function

    public function getCategories()
    {
        $categories = Category::query()->join('companies', 'categories.company_id', '=', 'companies.id')
            ->select('categories.*')
            ->get();

        $categories = CategoryResource::collection($categories);

        return $this->setStatus('success')->setCode(200)->setData($categories)->send();

    }//end of getCategories function
}
