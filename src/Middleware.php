<?php


namespace Sfneal\Controllers;


use Closure;
use Illuminate\Http\Request;


// todo: create tests
abstract class Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    abstract public function handle(Request $request, Closure $next);
}
