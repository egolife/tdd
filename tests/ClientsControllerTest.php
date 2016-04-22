<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientsControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     * @expectedException \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function it_prevent_non_admins_from_see_clients()
    {
        /**
         * Given: non-admin user logged-in
         * When: user tries to reach clients index
         * Then: user got 403 status code
         */
        $user = factory(User::class)->create([
            'is_admin' => false
        ]);
        Auth::loginUsingId($user->id);
        $this->visit('clients');
    }

    /** @test */
    public function it_show_clients_index_page()
    {
        /**
         * Given: admin user logged-in
         * When: user tries to reach clients index
         * Then: he got 200 status code and see page
         */
        $user = factory(User::class)->create([
            'is_admin' => true
        ]);
        Auth::loginUsingId($user->id);
        $this->visit('clients')->seeStatusCode(200)->seePageIs('clients')->see('Клиенты');
    }
}
