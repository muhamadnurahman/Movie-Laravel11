<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

    $middleware->alias([
        'isMember' => App\Http\Middleware\CheckMembership::class,
        'IsAuth' => App\Http\Middleware\IsAuth::class,
    ]);

    $middleware->validateCsrfTokens(except:[
            '*' //jadi ini buat matiin validasi token di semua(*) sistem, 'halaman.php / *'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
