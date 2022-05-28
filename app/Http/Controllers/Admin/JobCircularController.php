<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\JobCircular;
use App\Http\Controllers\Controller;
use App\job_apply_list;
use Illuminate\Support\Facades\Auth;

class JobCircularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $job_circular = JobCircular::latest()->get();
        return view('admin.job_circular.list', compact('job_circular'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job_circular.create');
    }

   public function apply_list()
    {   
        $apply_list=job_apply_list::latest()->get();
        return view('admin.job_circular.apply_list',compact('apply_list'));
    }
public function apply_list_details($id){
    $job_apply_list =job_apply_list::find($id);
    return view('admin.job_circular.apply_details', compact('job_apply_list'));
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required|max:100',
            'company_name'=> 'required',
            'type'=> 'required',
            'des'=> 'required',
            'deadline'=> 'required',
            'workplace'=> 'required',
            'vacancy'=> 'required',
            'salary'=> 'required',
            'status'=> 'required|integer',
        ]);
        JobCircular::create($request->all());
        return redirect()->route('admin.job_circular.index')->with('success', 'Successfully Created New Job');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showJobCircular = JobCircular::find($id);
        return view('admin.job_circular.show', compact('showJobCircular'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editCircular = JobCircular::find($id);
        return view('admin.job_circular.update', compact('editCircular'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=> 'required|max:100',
            'company_name'=> 'required|max:100',
            'type'=> 'required',
            'des'=> 'required',
            'deadline'=> 'required',
            'workplace'=> 'required',
            'vacancy'=> 'required',
            'salary'=> 'required',
            'status'=> 'required|integer',
        ]);
        JobCircular::find($id)->update($request->all());
        return redirect()->route('admin.job_circular.index')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobCircular::find($id)->delete();
        // return redirect()->route('admin.job_circular.index');
        return "success";
    }
}
