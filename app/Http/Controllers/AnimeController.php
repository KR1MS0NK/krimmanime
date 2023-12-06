<?php

namespace App\Http\Controllers;

use App\Models\anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Public\uploads;


class AnimeController extends Controller
{

    public function index()
    {
       $list = anime::paginate(2);
       
       return view('anime-list',compact('list'));
     }


   

    public function ani($id)
    {
      
       $result = DB::select('select  * from anime where id =? ',[$id]);
       return view('includes.view',['result'=>$result],['image']);
     }

    
}
