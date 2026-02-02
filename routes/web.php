<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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