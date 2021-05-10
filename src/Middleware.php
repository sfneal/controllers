<?php

namespace Sfneal\Controllers;

use Closure;
use Illuminate\Http\Request;

// todo: create tests
interface Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next);
}
