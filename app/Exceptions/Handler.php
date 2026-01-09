<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    protected $levels = [];
    protected $dontReport = [];
    protected $dontFlash = ['current_password', 'password', 'password_confirmation'];

    public function render($request, Throwable $e)
    {
        if ($e instanceof ModelNotFoundException) {
            return response()->json(['message' => 'Recurso não encontrado'], 404);
        }

        if ($e instanceof ValidationException) {
            return response()->json([
                'message' => 'Dados inválidos',
                'errors' => $e->errors()
            ], 422);
        }

        if ($e instanceof HttpException) {
            return response()->json([
                'message' => $e->getMessage() ?: 'Erro no servidor'
            ], $e->getStatusCode());
        }

        return response()->json(['message' => 'Erro interno no servidor'], 500);
    }
}
