<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppRequest;
use App\Models\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class AppController extends Controller
{
    use ResponseTrait;

    protected $data = [
        'page_title' => 'التطبيقات',
        'create' => 'إضافه تطبيق',
        'edit' => 'تعديل تطبيق',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_apps'])->only(['index', 'data']);
        $this->middleware(['permission:update_apps'])->only(['update', 'edit']);
        $this->middleware(['permission:create_apps'])->only(['create', 'store']);
        $this->middleware(['permission:delete_apps'])->only(['destroy', 'bulkDelete']);
    }


    public function data()
    {
        $apps = DB::table('apps')->where('company_id', auth()->user()->company->id)->where('model', '!=', 'apps')->get();
        $model = 'apps';
        return DataTables::of($apps)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->addColumn('status', function ($raw) use ($model) {
                return view('company.includes.status_btn', compact('raw', 'model'));
            })
            ->make(true);

    }//end of data function

    public function index()
    {
        return view('company.settings.apps.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.settings.apps.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppRequest $request)
    {
        $data = $request->validated();
        $data['status'] = $request->status ?? 'inactive';
        $data['company_id'] = auth()->user()->company->id;
        App::create($data);
        return $this->setAddedSuccess();
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
    public function edit(App $app)
    {
        return view('company.settings.apps.edit', ['data' => $this->data], compact('app'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AppRequest $request, App $app)
    {
        $data = $request->validated();
        $data['status'] = $request->status ?? 'inactive';
        $app->update($data);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(App $app)
    {
        $app->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);
        App::destroy($ids['items']);
        return $this->setDeletedSuccess();

    }//end of bulkDelete function

    public function updateStatus(Request $request, $id)
    {
        $app = App::findOrFail($id);
        if ($app->model == 'apps') {
            return $this->setError('عذراً لا يمكن تعديل هذا التطبيق');
        }
        $app->update(['status' => $request->status]);
        return $this->setUpdatedSuccess();
    }//end of updateStatus function
}
