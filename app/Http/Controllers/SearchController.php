<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anime;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request){

        
            
            $search_text = $_GET['query'];
            $result = DB::table('anime')-> where('name','LIKE','%' .$search_text. '%' )->get();
            return view('s-result',['result'=>$result]);
        
    }
}
