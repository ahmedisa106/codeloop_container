<?php

namespace App\Http\Controllers\Api\Company;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TermResource;
use App\Models\About;
use App\Models\ContactUs;
use App\Models\Customer;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $rentals = $this->getContainerRentals();
        $contracts = $this->getContracts();
        $customers = $this->getCustomers();
        return $this->setStatus('success')->setCode(200)->setData(['customers' => $customers, 'container_rentals' => $rentals, 'contracts' => $contracts])->send();

    }//end of index function


    public function getCustomers()
    {
        $to = now();
        $from = now()->subMonths(5);
        $duration = $to->diffInMonths($from);
        $customers = [];
        $months = [];
        for ($x = 1; $x <= $duration; $x++) {
            array_unshift($customers, ['month' => $to->format('M'), 'value' => Customer::query()->whereMonth('created_at', $to->format('m'))->count()]);
            array_unshift($months, $to->format('M'));
            $to->subMonth();
        }
        return $customers;
    }//end of getCustomers function

    public function getContainerRentals()
    {
        $rentals = DB::table('container_rentals')->where('company_id', auth('api')->user()->id)
            ->select('status', DB::raw('count(id) as count'))->groupBy('status')->get();
        return $rentals;
    }//end of getContainerRentals function

    public function getContracts()
    {
        $contracts = DB::table('contracts')->where('company_id', auth('api')->user()->id)
            ->select('status', DB::raw('count(id) as count'))->groupBy('status')->get();
        return $contracts;
    }//end of getContainerRentals function

    public function getTerms()
    {
        $terms = collect(Term::get(['body']));
        $terms = TermResource::collection($terms);
        return $this->setStatus('success')->setCode(200)->setData($terms)->send();
    }//end of getTerms function

    public function about()
    {
        $about = About::first();
        return $this->setStatus('success')->setCode(200)->setData($about)->send();
    }//end of getTerms function

    public function contactUs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'body' => 'required',
        ], [], [
            'name' => 'الإسم',
            'email' => 'البريد  الإلكتروني',
            'phone' => 'الهاتف',
            'body' => 'الرساله',
        ]);
        if ($validator->fails()) {
            return $this->setStatus('Error')->setCode(400)->setMessage($validator->errors()->first())->send();
        }
        ContactUs::create($validator->validated());
        return $this->setStatus('success')->setCode(200)->setMessage('تم إرسال البيانات بنجاح')->send();
    }//end of contactUs function
}
