<?php

namespace Tests\Feature\Livewire\Authentication;

use App\Livewire\Authentication\Register;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function renders_successfully(): void
    {
        Livewire::test(Register::class)->assertStatus(200);
    }

    /** @test */
    public function component_exists_on_the_page(): void
    {
        $this->get('/register')->assertSeeLivewire(Register::class);
    }

    /** @test */
    public function test_can_set_form(): void
    {
        $component = Livewire::test(Register::class)
            ->set('form.name', 'Test User')
            ->set('form.email', 'test@example.com')
            ->set('form.password', 'password')
            ->set('form.password_confirmation', 'password');
        $component->assertSet('form.name', 'Test User');
        $component->assertSet('form.email', 'test@example.com');
        $component->assertSet('form.password', 'password');
        $component->assertSet('form.password_confirmation', 'password');
    }

    /** @test */
    public function can_register(): void
    {
        $component = Livewire::test(Register::class)
            ->set('form.name', 'Test User')
            ->set('form.email', 'test@example.com')
            ->set('form.password', 'password')
            ->set('form.password_confirmation', 'password');
        $component->call('register');
        $component->assertHasNoErrors();
        $component->assertRedirect(route('dashboard', absolute: false));
        $this->assertAuthenticated();
    }
}
