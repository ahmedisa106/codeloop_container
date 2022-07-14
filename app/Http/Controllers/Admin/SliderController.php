<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'الأسليدر',
        'create' => 'إضافة سليدر جديد',
        'edit' => 'تعديل سليدر',
    ];

    public function data()
    {
        $sliders = Slider::get();
        $model = 'sliders';
        return DataTables::of($sliders)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('admin.includes.check_item', compact('raw'));
            })
            ->addColumn('photo', function ($raw) {
                return '<img src="' . $raw->image . '">';
            })
            ->rawColumns(['photo' => 'photo'])
            ->make(true);
    }//end of data function

    public function index()
    {
        return view('admin.pages.sliders.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.sliders.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data ['photo'] = $this->upload($request->photo, 'sliders');
        }
        Slider::create($data);
        return $this->setAddedSuccess();
    }


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
    public function edit(slider $slider)
    {
        return view('admin.pages.sliders.edit', ['data' => $this->data], compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, slider $slider)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data ['photo'] = $this->upload($request->photo, 'sliders', true, $slider->photo);
        }
        $slider->update($data);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        $slider->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $items);
        Slider::destroy($items['items']);
        return $this->setDeletedSuccess();
    }//end of bulkDelete function
}
