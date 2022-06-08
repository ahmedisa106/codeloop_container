<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobTypeRequest;
use App\Models\JobType;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class JobTypeController extends Controller
{
    use ResponseTrait;

    protected $data = [
        'page_title' => 'أنواع الوظائف',
        'create' => ' إضافه نوع وظيفه',
        'edit' => 'تعديل نوع وظيفه',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_job-types'])->only('index', 'data');
        $this->middleware(['permission:create_job-types'])->only('create', 'store');
        $this->middleware(['permission:update_job-types'])->only('edit', 'update');
        $this->middleware(['permission:delete_job-types'])->only('destroy', 'bulkDelete');
    }

    public function data()
    {
        $types = auth()->user()->company->jobTypes;
        $model = 'job-types';
        return DataTables::of($types)
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
        return view('company.settings.job_types.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.settings.job_types.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobTypeRequest $request)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;

        JobType::create($data);


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
    public function edit(JobType $jobType)
    {
        return view('company.settings.job_types.edit', ['data' => $this->data], compact('jobType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobTypeRequest $request, JobType $jobType)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;

        $jobType->update($data);
        return $this->setDeletedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobType $jobType)
    {
        $jobType->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);
        JobType::destroy($ids['items']);
        return $this->setDeletedSuccess();
    }//end of bulkDelete function
}
