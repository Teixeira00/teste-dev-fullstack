<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificaApiKey
{
    public function handle(Request $request, Closure $next)
    {
        $chave = $request->header('X-API-KEY');

        if ($chave !== env('API_KEY')) {
            return response()->json(['erro' => 'Não autorizado'], 401);
        }

        return $next($request);
    }
}
