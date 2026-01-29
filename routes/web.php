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

Route::get('/movie', function () {
    $movies = [];

    for ($i = 0 ; $i < 10; $i++){
        $movies[]=[
            'title' => 'Movie',
            'year' => '2025',
            'genre' => 'Action',
        ];
    }

    echo '<h1>Movies</h1>';
    echo '<ul>';

    foreach($movies as $movie) {
        echo '<li>' .$movie['title'] . '-' . $movie['year'] . '-'. $movie['genre'] . '</li>';
    }

    echo '</ul>';
});

Route::post('/movie', function() use ($movies){
    $movies[] = [
        'title' => request('title'),
        'genre' => request('genre'),
        'year' => request('year'),
    ];

    echo '<h1>Movies</h1>';
    echo '<ul>';

    foreach($movies as $movie) {
        echo '<li>' .$movie['title'] . '-' . $movie['year'] . '-'. $movie['genre'] . '</li>';
    }

    echo '</ul>';
});