<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'firstname' => 'Lucas',
            'name' => 'Pavin',
            'email' => 'test@example.com',
            'password' =>'password',
            'password_confirmation' => 'password',
            'dateOfBirth' => '14/08/2001',
            'status' => 'professionnel',
            'chooseStatus' => 'sponsorisez',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
