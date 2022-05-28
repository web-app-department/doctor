<?php

namespace App\Http\Controllers;

use App\job_apply_list;
use App\JobCircular;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    
    public function index(){
        $job=JobCircular::where('status','1')->latest()->paginate(10);

        return view('job.index',compact('job'));
    }

    public function details($id)
    {
        $post = JobCircular::where('status','1')->where('id',$id)->first();
        return view('job.details',compact('post'));

    }
    public function apply_list_submit(Request $request){
     
        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required',
            'city'=> 'required',
            'address'=> 'required',
            'number'=> 'required',
        
        ]);
        $data['job_id']=$request->job_id;
        $data['name']=$request->name;
        $data['city']=$request->city;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['number']=$request->number;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
            $file = $request->file('file');
            if($file){
                
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('file',$filename);
            $data['file']=$filename;
              $insert=DB::table('job_apply_lists')->insert($data);
             return redirect()->back()->with('message', 'Successfully Submit Your Application');
            }else{
                $insert=DB::table('job_apply_lists')->insert($data);
                return redirect()->back()->with('message', 'Successfully Submit Your Application'); 
            }
    }

}
