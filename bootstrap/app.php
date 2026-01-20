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
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (Throwable $e) {
            if ($e->getCode() === 500 || $e instanceof \Exception) {
                \Illuminate\Support\Facades\Log::error('Application error: ' . $e->getMessage(), [
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'trace' => $e->getTraceAsString(),
                ]);

                if (request()->expectsJson()) {
                    return response()->json([
                        'message' => 'Internal Server Error',
                        'error' => config('app.debug') ? $e->getMessage() : 'An error occurred',
                    ], 500);
                }

                return response()->view('errors.500', [], 500);
            }
        });
    })->create();
