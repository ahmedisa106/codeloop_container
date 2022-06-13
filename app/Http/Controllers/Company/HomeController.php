<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('company.index');
    }//end of index function
}
