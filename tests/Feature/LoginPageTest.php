<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_login_using_the_login_form()
    {
        $user=User::factory()->create();
        $response=$this->post('/login',['email'=>$user->email,'password'=>'password']);
        $this->assertAuthenticated();
        $response->assertRedirect('/');
    }
}
