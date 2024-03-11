<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegisterControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_register_user(): void
    {
        /*         $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->post(route('register'));

        $response->assertRedirect('dashboard'); */ {
            $userData = [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => 'password',
                'password_confirmation' => 'password',
            ];

            $response = $this->post(route('register'), $userData);

            $response->assertRedirect(route('dashboard'));

            $user = User::where('email', $userData['email'])->first();
            $this->assertNotNull($user);
            $this->assertAuthenticatedAs($user);
        }
    }
}
