<?php

namespace Tests\Feature\Livewire\Authentication;

use App\Livewire\Authentication\Login;
use App\Livewire\Shared\Sidebar\Left\Base;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function renders_successfully(): void
    {
        Livewire::test(Login::class)->assertStatus(200);
    }

    /** @test */
    public function component_exists_on_the_page(): void
    {
        $this->get('/')->assertSeeLivewire(Login::class);
    }

    /** @test */
    public function test_users_can_login(): void
    {
        $user = User::factory()->create();

        $component = Livewire::test(Login::class)
            ->set('form.email', $user->email)
            ->set('form.password', 'password');
        $component->call('login');
        $component->assertHasNoErrors()->assertRedirect(route('dashboard', absolute: false));

        $this->assertAuthenticated();
    }

    /** @test */
    public function test_users_incorrect_password(): void
    {
        $user = User::factory()->create();

        $component = Livewire::test(Login::class)
            ->set('form.email', $user->email)
            ->set('form.password', 'asdf');
        $component->call('login');
        $component->assertHasErrors()->assertNoRedirect();
        $this->assertGuest();
    }

    /** @test */
    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $component = Livewire::test(Base::class)->call('logout');
        $component->assertRedirect('/');

        $this->assertGuest();
    }
}
