<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    $movies = [];

    for ($i = 0 ; $i < 10; $i++){
        $movies[]=[
            'title' => 'Movie',
            'year' => '2025',
            'genre' => 'Action',
        ];
    }

Route::get('/movie', function () use ($movies) {
    return $movies;
});

Route::post('/movie', function() use ($movies){
    $movies[] = [
        'title' => request('title'),
        'genre' => request('genre'),
        'year' => request('year'),
    ];

    return $movies;
});

Route::put('/movie', function() use ($movies){
    $movies[2]['title'] = request('title');
    $movies[2]['year'] = request('year');
    $movies[2]['genre'] = request('genre');

    return $movies;
});