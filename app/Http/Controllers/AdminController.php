<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_donor');
    }
    public function upload(Request $request)
    {
        $donors=new Donor();
        $photo=$request->file('file');
        $photoname=time().'.'.$photo->getClientOriginalExtension();
        $request->file->move('donorphotos',$photoname);
        $donors->photo=$photoname;
        $donors->name=$request->name;
        $donors->number=$request->number;
        $donors->place=$request->place;
        $donors->blood_group=$request->blood_group;

        $donors->save();
        return redirect()->back()->with('message', 'Donor Added Successfully');
    }
}
