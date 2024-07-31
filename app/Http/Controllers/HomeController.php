<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $highestPricePhones = DB::table('phones')->orderBy('price', 'desc')->limit(3)->get();
        $lowestPricePhones = DB::table('phones')->orderBy('price', 'asc')->limit(3)->get();
        $categories = DB::table('categories')->get(); // Lấy danh sách danh mục

        return view('home', compact('highestPricePhones', 'lowestPricePhones', 'categories'));
    }
}