<?php

namespace App\Http\Controllers;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Models\About;
use App\Models\Blog;
use App\Models\Company;
use App\Models\CompanyPackage;
use App\Models\ContactUs;
use App\Models\Package;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    use Upload, ResponseTrait;

    public function index()
    {
        $sliders = Slider::get(['title', 'photo']);
        $about = About::first(['title', 'photo', 'description']);
        $services = Service::get(['title', 'photo', 'id']);
        $blogs = Blog::get(['title', 'photo', 'created_at', 'id']);
        return view('website.index', compact('sliders', 'about', 'services', 'blogs'));
    }

    public function about()
    {
        $page_title = 'من نحن';
        $about = About::first();
        return view('website.pages.about', compact('page_title', 'about'));

    }//end of about function

    public function services()
    {
        $page_title = 'خدماتنا';
        $services = Service::get(['id', 'title', 'photo']);
        return view('website.pages.services.index', compact('page_title', 'services'));

    }//end of services function

    public function showService($id)
    {
        $current_service = Service::findOrFail($id);
        $services = Service::get(['id', 'title', 'photo']);
        $page_title = 'خدماتنا';
        return view('website.pages.services.show', compact('current_service', 'services', 'page_title'));

    }//end of showService function

    public function packages()
    {
        $page_title = 'الباقات';
        $packages = Package::where('status', 'active')->get();
        return view('website.pages.packages', compact('page_title', 'packages'));

    }//end of packages function


    public function packageRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:companies,name',
            'commercial_number' => 'required|unique:companies,commercial_number',
            'tax_card_number' => 'required|unique:companies,tax_card_number',
            'username' => 'required|unique:companies,username',
            'email' => 'required|unique:companies,email|email',
            'password' => 'required',
            'logo' => 'sometimes|nullable|image',
            'phone' => 'required|numeric|unique:companies,phone',
        ], [],
            [
                'name' => 'اسم المؤسسة',
                'username' => 'إسم المستخدم',
                'email' => 'البريد الإلكتروني',
                'password' => 'كلمه المرور',
                'phone' => 'رقم الجوال',
                'commercial_number' => 'رقم السجل التجاري',
                'tax_card_number' => 'رقم البطاقه الضريبيه',
                'logo' => 'الشعار',
            ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 401);
        }
        $data = $validator->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = $this->upload($request->logo, 'companies');
        }
        $data['password'] = bcrypt($request->password);


        DB::beginTransaction();
        $company = Company::create($data);
        $package = Package::find($request->package_id);


        CompanyPackage::create([
            'company_id' => $company->id,
            'package_id' => $request->package_id,
            'package_finish_at' => now()->subMonths($package->period)->toDateString(),
            'package_price' => $package->price,
            'discount' => 0,
            'price_after_discount' => $package->price,
            'status' => 'pending',
        ]);
        $company->history()->create([
            'package_id' => $request['package_id'],
            'status' => 'pending',
            'note' => 'تم الإشتراك في باقة جديده',
            'at' => now()->toDateString(),
        ]);
        DB::commit();

        return $this->setAddedSuccess('تم إرسال البيانات بنجاح.. برجاء إنتظار موافقه الإداره !');


    }//end of packageRequest function

    public function blogs()
    {
        $page_title = 'المقالات';
        $blogs = Blog::get();

        return view('website.pages.blogs.index', compact('page_title', 'blogs'));

    }//end of blogs function

    public function showBlog($id)
    {
        $page_title = 'المقاللات';
        $blogs = Blog::get();
        $current_blog = Blog::findOrFail($id);

        return view('website.pages.blogs.show', compact('page_title', 'blogs', 'current_blog'));
    }//end of showBlog function

    public function terms()
    {
        $page_title = 'الشروط والأحكام';
        $term = Term::first();
        return view('website.pages.terms', compact('page_title', 'term'));

    }//end of  function

    public function contact()
    {
        $page_title = 'تواصل معنا';
        return view('website.pages.contact_us', compact('page_title'));
    }//end of contact function

    public function contactUs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'body' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric'
        ], [], [
            'name' => 'الإسم',
            'body' => 'الرسالة',
            'email' => 'البريد الإلكتروتني',
            'phone' => 'الهاتف',
        ]);
        if ($validator->fails()) {
            return response()->json(['data' => $validator->errors()->first()], 403);
        }

        $data = $validator->validated();
        ContactUs::create($data);

        return response()->json(['data' => 'تم إرسال طلبك بنجاح']);

    }//end of contactUs function
}
