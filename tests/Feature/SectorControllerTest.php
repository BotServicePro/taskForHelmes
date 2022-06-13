<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class SectorControllerTest extends TestCase
{
    public function testShow(): void
    {
        $response = $this->get(route('showSectors'));
        $response->assertSee('Please enter your name and pick the Sectors you are currently involved in.');
        $response->assertOk();
    }
}