<?php

namespace App\Http\Controllers;

use App\Models\anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Public\uploads;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function __construct()
    {
       

        $this->middleware('auth');

    }

    public function index()
    {
     
     return view('includes.upload');
       
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'dlink' => 'required'
         ]);

        
        $upload = new anime;

        $upload->name = $request->input('name');
      
        $fileName = $path =time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $fileName);
        $upload->image = $fileName;

        $upload->describe = $request->input('describe');

        $upload->dlink = $request->input('dlink');

        $upload->save();
        
       return redirect()->back()->with('status','Uploaded Successfully');
    }






}
