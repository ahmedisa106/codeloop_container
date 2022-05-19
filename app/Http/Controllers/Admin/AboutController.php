<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'من نحن',
    ];

    public function index()
    {
        $about = About::first();

        return view('admin.pages.about.index', ['data' => $this->data], compact('about'));
    }//end of index function

    public function update(AboutRequest $request)
    {
        $data = $request->validated();
        $about = About::first();
        if ($about) {
            $data['photo'] = $request->hasFile('photo') ? $this->upload($request->photo, 'about', true, $about->photo) : $about->photo;
            $about->update($data);
        } else {
            $data['photo'] = $request->hasFile('photo') ? $this->upload($request->photo, 'about') : '';

            About::create($data);
        }

        return $this->setUpdatedSuccess();

    }//end of store function
}
