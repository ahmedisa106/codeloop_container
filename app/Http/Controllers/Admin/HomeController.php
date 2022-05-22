<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Package;
use App\Models\Service;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $packages_count = Package::get()->count();
        $companies_count = Company::get()->count();
        $services_count = Service::get()->count();
        $blogs_count = Blog::get()->count();

        $from = Carbon::now()->subMonths(5);
        $to = Carbon::now();
        $months = $from->diffInMonths($to);

        $colors = ['#69F0AE', '#FFAB40', '#41C4FF', '#536DFE', '#FF4081', '#26A69A'];
        $companies_list = [];
        $month_list = [];

        for ($i = 0; $i <= $months; $i++) {
            array_unshift($month_list, $to->format('M'));
            array_unshift($companies_list, ['count' => Company::whereDate('created_at', $to->format('Y-m-d'))->count(), 'color' => $colors[$i]]);
            $to->subMonth();
        }
        $month_list = json_encode($month_list, JSON_UNESCAPED_UNICODE);


        return view('admin.index', compact('services_count', 'packages_count', 'companies_count', 'blogs_count', 'month_list', 'companies_list'));

    }//end of index function
}
