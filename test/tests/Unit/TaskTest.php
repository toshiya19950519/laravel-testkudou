<?php

namespace Tests\Unit;

use App\Models\Task;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $tasks = Task::all();
        $this->assertEquals(3, count($tasks));

        $taskNotFinished = Task::where('executed', false)->get();
        $this->assertEquals(2, count($taskNotFinished));

        $taskFinished = Task::where('executed', true)->get();
        $this->assertEquals(1, count($taskFinished));

        $task1 = Task::where('title', "テストタスク")->first();
        $this->assertFalse(boolval($task1->executed));

        $task1 = Task::where('title', "終了タスク")->first();
        $this->assertTrue(boolval($task1->executed));
    }

    public function testGetTaskDetail() {
        $tasks = Task::find(2);
        $this->assertEquals('テストタスク', $tasks->title);
    }
}
