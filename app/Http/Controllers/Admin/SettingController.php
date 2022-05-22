<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;

class SettingController extends Controller
{
    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'الإعدادات',
    ];

    public function index()
    {

        $setting = Setting::first();
        return view('admin.pages.settings.index', ['data' => $this->data], compact('setting'));

    }//end of index function

    public function update(SettingRequest $request)
    {
        $data = $request->validated();
        $setting = Setting::first();
        if ($setting) {
            $data['logo'] = $request->hasFile('logo') ? $this->upload($request->logo, 'settings', true, $setting->logo) : $setting->logo;
            $data['footer_logo'] = $request->hasFile('footer_logo') ? $this->upload($request->footer_logo, 'settings', true, $setting->footer_logo) : $setting->footer_logo;
            $setting->update($data);
        } else {
            $data['logo'] = $request->hasFile('logo') ? $this->upload($request->logo, 'settings') : '';
            $data['footer_logo'] = $request->hasFile('footer_logo') ? $this->upload($request->footer_logo, 'settings') : '';

            Setting::create($data);
        }

        return $this->setUpdatedSuccess();

    }//end of store function
}
