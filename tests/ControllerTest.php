<?php

namespace Sfneal\Controllers\Tests;

class ControllerTest extends TestCase
{
    /** @test */
    public function status_is_okay()
    {
        // Get the response
        $response = $this->get('test');

        // Confirm status is Ok
        $response->assertStatus(200);
        $response->assertOk();

        // Confirm the view is correct
        $response->assertViewIs('test');
    }
}
