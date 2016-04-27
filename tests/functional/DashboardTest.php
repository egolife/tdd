<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashboardTest extends TestCase
{
    use DatabaseTransactions;

    public function it_can_show_all_active_tasks()
    {
        /**
         * Given: admin user logged-in
         * 3 new tasks from different clients
         * 1 accepted task
         * 2 tasks in progress
         * 2 done tasks
         * 1 task with feedback
         * 1 task pricing
         * any number of tasks with other statuses
         *
         * When: visit dashboard
         * Then: see all tasks to work with (10) ordered by priority
         */

        $this->createAdminUserAndLogin();
        $this->visit('home')->see('Admin Dashboard')->
    }
}
