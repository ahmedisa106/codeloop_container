<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModeratorRequest;
use App\Models\Moderator;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ModeratorController extends Controller
{
    use ResponseTrait;

    protected $data = [
        'page_title' => 'المشرفين',
        'create' => 'إضافه مشرف',
        'edit' => 'تعديل مشرف',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_moderators'])->only(['index', 'data']);
        $this->middleware(['permission:create_moderators'])->only(['create', 'store']);
        $this->middleware(['permission:update_moderators'])->only(['edit', 'update']);
        $this->middleware(['permission:delete_moderators'])->only(['destroy', 'bulkDelete']);

    }//end of __construct function

    public function data()
    {
        $moderators = auth()->user()->company->moderators;
        $model = 'moderators';
        return DataTables::of($moderators)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->make(true);
    }//end of data function

    public function index()
    {
        return view('company.moderators.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.moderators.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModeratorRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $data['company_id'] = auth()->user()->company->id;
        $moderator = Moderator::create($data);
        $moderator->attachRole('admin');

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
    public function edit(Moderator $moderator)
    {
        return view('company.moderators.edit', ['data' => $this->data], compact('moderator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModeratorRequest $request, Moderator $moderator)
    {
        $data = $request->validated();
        $data['password'] = $request->password ? bcrypt($request->password) : $moderator->password;
        $moderator->update($data);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moderator $moderator)
    {
        $moderator->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);
        Moderator::destroy($ids['items']);

        return $this->setDeletedSuccess();

    }//end of bulkDelete function
}
