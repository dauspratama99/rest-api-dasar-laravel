<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        
        $item = DB::table('tb_item')->get();

       if (is_null($item)){
           return response()->json('Data Not Found', 404);
       }
       return response()->json($item);

    }
}
