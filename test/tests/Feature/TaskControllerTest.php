<?php

namespace Tests\Feature;

use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200);
    }

    public function testGetTaskPath(): void
    {
        $response = $this->get('tasks/1');

        $response->assertStatus(200);
    }

    public function testGetTaskPathNotExists(): void
    {
        $response = $this->get('/tasks/0');

        $response->assertStatus(404);
    }
}
