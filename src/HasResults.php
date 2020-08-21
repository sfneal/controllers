<?php


namespace Sfneal\Controllers;


use Illuminate\Http\Request;

interface HasResults
{
    public function results(Request $request);
}
