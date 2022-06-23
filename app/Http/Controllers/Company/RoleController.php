<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    use ResponseTrait;

    protected $data = [
        'page_title' => 'الأدوار',
        'create' => 'إضافه دور',
        'edit' => 'تعديل دور',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_roles'])->only('index', 'data');
        $this->middleware(['permission:create_roles'])->only('create', 'store');
        $this->middleware(['permission:update_roles'])->only('edit', 'update');
        $this->middleware(['permission:delete_roles'])->only('destroy', 'bulkDelete');
    }

    public function data()
    {
        $roles = Role::get(['id', 'display_name']);
        $model = 'roles';
        return DataTables::of($roles)
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
        return view('company.roles.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.roles.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $data = $request->validated();
        unset($data['permissions']);

        $data['display_name'] = ucwords($data['name']);
        $data['description'] = ucwords($data['name']);
        DB::beginTransaction();
        $role = Role::create($data);

        $role->attachPermissions($request->permissions);
        DB::commit();
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
    public function edit(Role $role)
    {
        return view('company.roles.edit', ['data' => $this->data], compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $data = $request->validated();
        unset($data['permissions']);
        $data['display_name'] = ucwords($data['name']);
        $data['description'] = ucwords($data['name']);
        $role->update($data);

        $role->syncPermissions($request->permissions);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return $this->setDeletedSuccess();
    }
}
