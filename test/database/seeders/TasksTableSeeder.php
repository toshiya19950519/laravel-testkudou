<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'title' => 'aiwwmvwc',
            'executed' => false,
        ]);

        // 静的
        DB::table('tasks')->insert([
            'title' => "テストタスク",
            'executed' => false,
        ]);
        DB::table('tasks')->insert([
            'title' => "終了タスク",
            'executed' => true,
        ]);
    }
}
