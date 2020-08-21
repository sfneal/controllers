<?php


namespace Sfneal\Controllers;


use Illuminate\Http\Request;

abstract class AbstractResourceController extends AbstractController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    abstract public function index(Request $request);
    abstract public function show(Request $request, $id);
    abstract public function create(Request $request);
    abstract public function edit(Request $request, $id);
    abstract public function store(Request $request);
    abstract public function update(Request $request, $id);
    abstract public function destroy(Request $request, $id);
    abstract public function response();
}
