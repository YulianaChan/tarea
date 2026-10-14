<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_is_available_and_posts_to_the_login_route(): void
    {
        $this->withoutVite();

        $this->get('/login')
            ->assertOk()
            ->assertSee('Iniciar sesión')
            ->assertSee('action="http://localhost/login"', false)
            ->assertSee('name="email"', false)
            ->assertSee('name="password"', false);
    }

    public function test_invalid_login_email_is_reported(): void
    {
        $this->post('/login', [
            'email' => 'not-an-email',
            'password' => 'password',
        ])->assertSessionHasErrors('email');
    }

    public function test_successful_login_redirects_to_the_home_page(): void
    {
        $user = User::factory()->create([
            'email' => 'colaborador@example.com',
        ]);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ])->assertRedirect('/');

        $this->assertAuthenticatedAs($user);
        $this->get(route('Catalogo'))->assertOk();
    }
}
