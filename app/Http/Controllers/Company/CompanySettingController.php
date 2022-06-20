<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;

class CompanySettingController extends Controller
{
    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'الإعدادت العامه'
    ];

    public function index()
    {
        return view('company.settings.main_setting.index', ['data' => $this->data]);
    }

    public function update(CompanyRequest $request, $id)
    {

        $company = Company::find($id);
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = $this->upload($request->logo, 'companies', true, $company->logo);
        }
        if ($request->hasFile('seal')) {
            $data['seal'] = $this->upload($request->seal, 'companies', true, $company->seal);
        }

        $data['password'] = $request->password ? bcrypt($request->password) : $company->password;
        $company->update($data);
        return $this->setUpdatedSuccess();

    }//end of update function


}
