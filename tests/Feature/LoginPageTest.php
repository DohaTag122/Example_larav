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
        $user=User::factory()->create();// create user

        // like i write email and password in form and click submit
        $response=$this->post('/login',['email'=>$user->email,'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);
        $this->assertAuthenticated(); //check if you login or not
        $response->assertRedirect('index'); // check if will redirect to index or not
    }


    public function test_user_can_not_access_admin_page()
    {
        $user=User::factory()->create();// create user

        // like i write email and password in form and click submit
        $response=$this->post('/login',['email'=>$user->email,'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);
        $this->get('/admin/users');
        $response->assertRedirect('index');
    }

    public function test_user_can_access_admin_page()
    {
        $user=User::factory()->create();// create user
        $user->roles()->attach(1);

        // like i write email and password in form and click submit
        $this->post('/login',['email'=>$user->email,'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);
        $response=  $this->get('/admin/users');
        $response->assertSeeText('Users');
        
    }
}
