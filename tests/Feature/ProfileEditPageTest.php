<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileEditPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_profile_edit_page_is_available(): void
    {
        $this->withoutVite();

        $this->get('/Editar')
            ->assertOk()
            ->assertSee('Editar Perfil')
            ->assertSee('Datos Personales')
            ->assertSee('Credenciales de Acceso')
            ->assertSee('images/profile-avatar.svg')
            ->assertSee('name="full_name"', false)
            ->assertSee('role="switch"', false)
            ->assertSee('aria-checked="true"', false)
            ->assertSee('Guardar Cambios');

        $this->assertFileExists(public_path('images/profile-avatar.svg'));
    }
}
