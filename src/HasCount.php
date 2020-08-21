<?php


namespace Sfneal\Controllers;


use Illuminate\Http\Request;

interface HasCount
{
    public function count(Request $request);
}
