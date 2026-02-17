<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = DB::table('categories')->get();
        // $categories = DB::table('categories')->select(['id', 'name', 'slug'])->get(); 
        // $categories = DB::table('categories')->whereIn('id', [1, 2, 5])->get(); 
        // $categories = DB::table('categories')->where('id', 1)->first(); 
        $categories = DB::table('categories')
            ->where('id', 1)
            ->select(['id', 'name', 'slug'])->first(); 

        return $categories;
    }
}
