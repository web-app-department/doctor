<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Medicine;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index(){

        $medicines=Medicine::all();
        return view('admin.medicine.index',compact('medicines'));
    }

    public function create(){

        return view('admin.medicine.create');
    }

    public function store(Request $request){
        $store = new Medicine();
        $store->name=$request->name;
        $store->type=$request->type;
        $store->save();
        Toastr::success('Medicine Successfully Saved :)' ,'Success');
        return redirect()->route('admin.medicine.index');
    }

    public function edit($id){
        $medicines=Medicine::findorFail($id);
        return view('admin.medicine.edit',compact('medicines'));
    }
    public function update($id, Request $request){
        $store = Medicine::find($id);
        $store->name=$request->name;
        $store->type=$request->type;
        $store->save();
        Toastr::success('Medicine Successfully Update :)' ,'Success');
        return redirect()->route('admin.medicine.index');
    }

    public function delete($id){
        $medicines=Medicine::findorFail($id);
        $medicines->delete();
        Toastr::success('Medicine Successfully Delete :)' ,'Success');
        return redirect()->route('admin.medicine.index');

    }
}
