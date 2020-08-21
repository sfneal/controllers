<?php


namespace Sfneal\Controllers;


use Illuminate\Http\Request;

interface HasResults
{
    /**
     * Display a results table with rows of resource
     *
     * @param Request $request
     * @return mixed
     */
    public function results(Request $request);
}
