<?php

namespace Sfneal\Controllers;

use Illuminate\Http\Request;

interface HasCount
{
    /**
     * Return the total number of a resource.
     *
     * @param Request $request
     * @return mixed
     */
    public function count(Request $request);
}
