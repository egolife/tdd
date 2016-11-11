<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        Task::truncate();
        factory(Task::class, 10)->create();
    }
}