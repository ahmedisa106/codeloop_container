<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Package;
use App\Models\Service;
use App\Models\Term;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index()
    {
        $posts = Blog::all();
        $services = Service::all();
        $about = About::first();
        $terms = Term::first();
        $packages = Package::get();
        return response()->view('website.sitemap', [
            'posts' => $posts,
            'services' => $services,
            'about' => $about,
            'terms' => $terms,
            'packages' => $packages,
        ])->header('Content-Type', 'text/xml');
    }
}
