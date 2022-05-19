<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\TermRequest;
use App\Models\Term;

class TermController extends Controller
{
    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'الشروط ة الأحكام',
    ];

    public function index()
    {
        $term = Term::first();

        return view('admin.pages.terms.index', ['data' => $this->data], compact('term'));
    }//end of index function

    public function update(TermRequest $request)
    {
        $data = $request->validated();
        $term = Term::first();
        if ($term) {

            $term->update($data);
        } else {
            Term::create($data);
        }

        return $this->setUpdatedSuccess();

    }//end of store function
}
