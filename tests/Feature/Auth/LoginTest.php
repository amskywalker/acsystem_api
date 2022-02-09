<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_cannot_login_with_incorrect_password()
    {
        $user = User::factory()->make([
            'password' => bcrypt('random-password'),
            'active' => true
        ]);

        $response = $this->post('api/auth/login', [
            'registration' => $user->registration,
            'password' => 'invalid-password'
        ]);

        $response->assertStatus(401)->assertJson([
            'status' => "Error",
            'message' => "Credentials not match"
        ]);
    }

    public function test_user_can_login_with_correct_credentials()
    {
        $user = User::factory()->create([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);

        $response = $this->post('api/auth/login', [
            'registration' => $user->registration,
            'password' => $password,
        ]);
        $response->assertStatus(200)->assertJson([
            'status' => "Success",
        ])->assertJsonStructure([
            'status',
            'message',
            'data' => [
                'token'
            ]
        ]);
    }
}
