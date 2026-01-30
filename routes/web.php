<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    $movies = [];

    for ($i = 0 ; $i < 10; $i++){
        $movies[]=[
            'title' => 'Movie ' . $i,
            'year' => '2025',
            'genre' => 'Action',
        ];
    }


Route::group(
    [
        'middleware' => ['IsAuth'],
        'prefix' => 'movie',
        'as' => 'movie.'
    ], function () use ($movies) {

    Route::get('/movie', function () use ($movies) {
    return $movies;
});

Route::get('/{id}', function ($id) use ($movies) {
    return $movies[$id];
})->middleware(['isMember']);


Route::post('/', function() use ($movies){
    $movies[] = [
        'title' => request('title'),
        'genre' => request('genre'),
        'year' => request('year'),
    ];

    return $movies;
});

Route::put('/{id}', function($id) use ($movies){
    $movies[$id]['title'] = request('title');
    $movies[$id]['year'] = request('year');
    $movies[$id]['genre'] = request('genre');

    return $movies;
});

Route::patch('/{id}', function($id) use ($movies){
    $movies[$id]['title'] = request('title');
    $movies[$id]['year'] = request('year');
    $movies[$id]['genre'] = request('genre');

    return $movies;
});

Route::delete('/{id}', function($id) use ($movies){
    unset($movies[$id]);

    return $movies;
});
    
});

Route::get('/pricing', function() {
    return 'Please, Buy a membership!';
});


Route::get('/login', function(){
    return 'Login Page';

})->name('login');