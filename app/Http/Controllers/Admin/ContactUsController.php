<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactUsController extends Controller
{
    use ResponseTrait;

    protected $data = [
        'page_title' => 'طلبات التواصل',
    ];

    public function index()
    {
        return view('admin.pages.contact_us.index', ['data' => $this->data]);
    }

    public function data()
    {
        $contacts = ContactUs::get();
        $model = 'contact-us';

        return DataTables::of($contacts)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('admin.includes.check_item', compact('raw'));
            })
            ->make(true);


    }//end of data function

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactUs::findOrFail($id);

        return view('admin.pages.contact_us.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {

        parse_str($request->ids, $items);
        ContactUs::destroy($items['items']);
        return $this->setDeletedSuccess();
    }//end of bulkDelete function
}
