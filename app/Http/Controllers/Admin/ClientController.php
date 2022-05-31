<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ClientController extends Controller
{
    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'العملاء',
        'create' => 'إضافة عميل',
        'edit' => 'تعديل عميل',
    ];

    public function index()
    {
        return view('admin.pages.clients.index', ['data' => $this->data]);
    }//end of index function

    public function data()
    {
        $clients = Client::get();
        $model = 'clients';
        return DataTables::of($clients)
            ->addColumn('photo', function ($raw) {
                return '<img src="' . $raw->image . '">';
            })
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('admin.includes.check_item', compact('raw'));
            })
            ->rawColumns(['photo' => 'photo'])
            ->make(true);
    }//end of data function

    public function create()
    {
        return view('admin.pages.clients.create', ['data' => $this->data]);
    }//end of create function

    public function store(ClientRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload($request->photo, 'clients');
        }
        Client::create($data);
        return $this->setAddedSuccess();

    }//end of store function

    public function edit(Client $client)
    {
        return view('admin.pages.clients.edit', ['data' => $this->data], compact('client'));
    }//end of create function

    public function update(ClientRequest $request, Client $client)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload($request->photo, 'clients', true, $client->photo);
        }
        $client->update($data);
        return $this->setUpdatedSuccess();

    }//end of store function

    public function destroy(Client $client)
    {
        $client->delete();
        return $this->setDeletedSuccess();

    }//end of destroy function

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $items);
        Client::destroy($items['items']);
        return $this->setDeletedSuccess();


    }//end of destroy function

}
