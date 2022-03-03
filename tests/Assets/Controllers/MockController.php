<?php

namespace Sfneal\Controllers\Tests\Assets\Controllers;

use Sfneal\Controllers\Controller;

class MockController extends Controller
{
    public function __invoke()
    {
        return view('test');
    }
}
