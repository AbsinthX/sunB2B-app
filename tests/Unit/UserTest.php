<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => "Test Owy",
            'email' => "testowy@wp.pl"
        ]);

        $user2 = User::make([
            'name' => "Owy Test",
            'email' => "owytest@wp.pl"
        ]);

        $this->assertTrue($user1->email != $user2->email);

    }
}
