<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Rotas que estão isentas de verificação CSRF.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/callback',
    ];
}
