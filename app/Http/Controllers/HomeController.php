<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Package;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get(['title', 'photo']);
        $about = About::first(['title', 'photo', 'description']);
        $services = Service::get(['title', 'photo']);
        $blogs = Blog::get(['title', 'photo', 'created_at']);


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
        $packages = Package::get();
        return view('website.pages.packages', compact('page_title', 'packages'));

    }//end of packages function

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
            'phone' => 'required'
        ], [], [
            'name' => 'الإسم',
            'body' => 'الرساله',
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
