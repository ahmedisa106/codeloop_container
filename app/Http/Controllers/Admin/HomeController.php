<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailToCompany;
use App\Models\Blog;
use App\Models\Company;
use App\Models\CompanyPackage;
use App\Models\Package;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $packages_count = Package::get()->count();
        $companies_count = Company::get()->count();
        $services_count = Service::get()->count();
        $blogs_count = Blog::get()->count();

        $packages = DB::table('company_packages')->latest()->select('status as name', DB::raw('count(distinct company_id) as value'))->groupBy('status')->get();
        $packages->map(function ($model) {
            if ($model->name == 'pending') {
                $model->name = 'منتظر التفعيل';
            } elseif ($model->name == 'subscribed') {
                $model->name = 'مشترك';
            } else {
                $model->name = 'إشتراك منتهي';
            }
        });

        $packages = json_encode($packages, JSON_UNESCAPED_UNICODE);


        $from = Carbon::now()->subMonths(3);
        $to = Carbon::now();
        $months = $to->diffInMonths($from);


        $colors = ['#69F0AE', '#FFAB40', '#41C4FF', '#41C4FF', '#41C4FF', '#41C4FF'];
        $companies_list = [];
        $month_list = [];

        for ($i = 0; $i <= $months; $i++) {
            array_unshift($month_list, $to->format('M'));
            array_unshift($companies_list, ['count' => Company::whereMonth('created_at', $to->format('m'))->count(), 'color' => $colors[$i]]);
            $to->subMonth();
        }

        $month_list = json_encode($month_list, JSON_UNESCAPED_UNICODE);

        return view('admin.index', compact('services_count', 'packages_count', 'companies_count', 'blogs_count', 'month_list', 'companies_list', 'packages'));

    }//end of index function
}
