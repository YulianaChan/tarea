<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserCatalogPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_catalog_page_is_available(): void
    {
        $this->withoutVite();

        $this->actingAs(User::factory()->create())
            ->get('/Catalogo')
            ->assertOk()
            ->assertSee('Directorio de Personal')
            ->assertSee('Carlos Mendoza Ruiz')
            ->assertSee('Buscar por nombre')
            ->assertSee('data-role-filter="admin"', false)
            ->assertSee('data-status-filter="inactive"', false)
            ->assertSee('images/profile-avatar.svg');

        $this->assertFileExists(public_path('images/profile-avatar.svg'));
    }

    public function test_guest_can_open_catalog(): void
    {
        $this->get('/Catalogo')
            ->assertOk()
            ->assertSee('Directorio de Personal');
    }
}
