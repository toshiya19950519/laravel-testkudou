<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TasksIndexTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tasks')
                    ->assertSee('テストタスク')
                    ->screenshot("task_index");
                });
    }

    public function testIndexToDetail(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tasks')
                    ->assertSeeLink('テストタスク')
                    ->clickLink('テストタスク')
                    ->waitForLocation('/tasks/2', 1)
                    ->assertPathIs('/tasks/2')
                    ->assertSee('テストタスク');               
        });
    }
}
