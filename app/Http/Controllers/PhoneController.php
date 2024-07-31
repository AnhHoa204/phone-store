<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PhoneController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('phones');

        if ($request->has('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $phones = $query->get();
        $categories = DB::table('categories')->get();
        return view('list', compact('phones', 'categories'));
    }

    public function show($id)
    {
        $phone = DB::table('phones')->find($id);
        return view('detail', compact('phone'));
    }
}
