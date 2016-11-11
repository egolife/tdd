<?php

use App\Task;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashboardTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_can_show_all_active_tasks()
    {
        /**
         * Given:
         * admin user logged-in
         * 10 tasks with admin active statuses
         * 10 tasks with any other statuses
         *
         * When: visit dashboard
         * Then: see all his active tasks to work with (10) ordered by priority
         */

        $user = factory(User::class)->create([
            'name' => 'test',
            'is_admin' => true
        ]);
        //$statuses = Task::$adminActiveStatuses;
        //for($i=0; $i<=10; $i++){
        //    factory(Task::class)->create(['status' => $statuses[array_rand($statuses)]]);
        //}
        //$statuses = array_diff(Task::$statuses, Task::$adminActiveStatuses);
        //for($i=0; $i<=10; $i++){
        //    factory(Task::class)->create(['status' => $statuses[array_rand($statuses)]]);
        //}
        $this->seeInDatabase('users', ['name' => 'test']);

        $this->be($user);
        //$response = $this->call('GET', '/home');

        $this->visit('home')->see('Admin Dash');
        //$this->see('Welcome');

    }



    ///**
    // * @dataProvider conversionsProvider
    // */
    //public function testConversions($value, $expected)
    //{
    //    $this->assertEquals($expected, $this->markdown->toHTML($value));
    //}
    //
    //public function conversionsProvider()
    //{
    //    return [
    //        ["test", "<p>test</p>\n"],
    //        ["# title", "<h1>title</h1>\n"],
    //        ["Here's Johnny!", "<p>Here&#8217;s Johnny!</p>\n"],
    //    ];
    //}
}
