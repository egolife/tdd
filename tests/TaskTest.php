<?php

use App\Task;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskTest extends TestCase
{
    use DatabaseTransactions;

    protected $table;

    public function setUp()
    {
        $this->table = (new Task())->getTable();
        parent::setUp();
    }

    /** @test */
    public function it_can_store_task_in_db()
    {
        $task = new Task();
        $task->title = "Задача по добавлению задачи в задачи";
        $task->is_complete = false;
        $task->by_user_id = User::first()->id;
        $task->priority = Task::PRIORITY_LOW;
        $task->save();

        $this->seeInDatabase($this->table, ['title' => $task->title]);
    }

    /** @test */
    public function it_can_show_all_tasks()
    {
        Task::truncate();
        factory(Task::class, 10)->create(['by_user_id' => User::first()->id]);
        $this->assertEquals(10, Task::all()->count());
    }
}
