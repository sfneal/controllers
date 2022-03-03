<?php

namespace Sfneal\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

// todo: add tests
abstract class ResourceController extends Controller
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

    /**
     * Display the resource dashboard/landing page view.
     *
     * @param  Request  $request
     * @return mixed
     */
    abstract public function index(Request $request);

    /**
     * Display a resource's details page.
     *
     * @param  Request  $request
     * @param  Model|int  $id
     * @return mixed
     */
    abstract public function show(Request $request, $id);

    /**
     * Display the create a new resource view.
     *
     * @param  Request  $request
     * @return mixed
     */
    abstract public function create(Request $request);

    /**
     * Display the edit an existing resource view.
     *
     * @param  Request  $request
     * @param $id
     * @return mixed
     */
    abstract public function edit(Request $request, $id);

    /**
     * Store a new resource.
     *
     * @param  Request  $request
     * @return mixed
     */
    abstract public function store(Request $request);

    /**
     * Update an existing resource.
     *
     * @param  Request  $request
     * @param $id
     * @return mixed
     */
    abstract public function update(Request $request, $id);

    /**
     * Destroy an existing resource.
     *
     * @param  Request  $request
     * @param $id
     * @return mixed
     */
    abstract public function destroy(Request $request, $id);

    /**
     * Return the default resource response.
     *
     * @return mixed
     */
    abstract public function response();
}
