<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
        $movie = Movie::find(1)->with('ratings')->first();

        return $movie;
    }
}
