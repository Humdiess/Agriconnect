<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request; // Pastikan ini terimpor
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Pastikan menggunakan Illuminate\Http\Request di sini
        $exceptions->render(function (NotFoundHttpException $exception, Request $request) {
            if ($request->is(['admin', 'admin/*'])) {
                if ($exception->getStatusCode() == 404) {
                    return response()->view("errors.404", [], 404);
                }
            }
        });
    })->create();
