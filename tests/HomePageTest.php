<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{
    use DatabaseTransactions, WithoutMiddleware;

    /** @test */
    public function it_can_show_dashboard()
    {
        $this->visit('/home')->see('Dashboard');
    }
}
