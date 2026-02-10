<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('app');
});

Route::get('/home', function(){
    $MovieCategory = 'action';
    return view('home', compact('MovieCategory'));
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
        'middleware' => [],
        'prefix' => 'movie',
        'as' => 'movie.'
    ], function () use ($movies) {

Route::get('/',[MovieController::class, 'index']);

Route::get('/{id}', [MovieController::class, 'show']);


Route::post('/', [MovieController::class, 'store']);

Route::put('/{id}', [MovieController::class, 'update']);

Route::patch('/{id}', [MovieController::class, 'update']);

Route::delete('/{id}', [MovieController::class, 'destroy']);
    
});

Route::get('/pricing', function() {
    return 'Please, Buy a membership!';
});


Route::get('/login', function(){
    return 'Login Page';

})->name('login');

Route::post('/request', function(request $request){
    // if($request->has(['name', 'password'])){
    //     return 'Login berhasil';
    // }
    // if($request->hasAny(['name', 'password'])){
    //     return 'Login berhasil';
    // }

    $request->merge(['email' => 'a@b.com']);

    if($request->missing('email')){
        return 'Email tidak ada';
    }else {
        return 'Datanya ada';
    }
    return 'Gagal';
});

Route::get('/response', function(){
    return response('OK')->header('Content-Type', 'text/plain');
});

Route::get('/cache-control', function(){
    return Response::make('Page allow to cache', 200)
    ->header('Cache-Control', 'public, max-age=86400');
});

Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    

Route::get('/home', function(){
    $movies = [
        ['title' => 'The Matrix', 'year' => 1999],
        ['title' => 'Inception', 'year' => 2010],
        ['title' => 'Interstellar', 'year' => 2014],
        ['title' => 'The Dark Night', 'year' => 2008],
        ['title' => 'Pulp Fiction', 'year' => 1994],
        ['title' => 'Avenger : Endgame', 'year' => 2019],
        ['title' => 'The Shawhank Redemption', 'year' => 1994],
        ['title' => 'Parasite', 'year' => 2019],
        ['title' => 'The God Father', 'year' => 1972],
        ['title' => 'Spider-Man: Into the Spider-Verse', 'year' => 2018],
    ];

    return view('home', compact('movies'));
});
Route::get('/dashboard', function(){
    $user = 'admin';
    return response('login berhasil', 200)->cookie('user', $user);
});

Route::get('/logout', function(){
    return redirect()->action([HomeController::class, 'index']);
});

Route::get('/privacy', function () {
        return 'Privacy page';
    });

    Route::get('/terms', function () {
        return 'Terms page';
    });
});

Route::get('/external', function(){
    return redirect('/');
});