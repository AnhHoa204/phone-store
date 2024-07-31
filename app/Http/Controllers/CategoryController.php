<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();
        $phones = DB::table('phones')->where('category_id', $id)->get();
        
        return view('category', compact('category', 'phones'));
    }
}
