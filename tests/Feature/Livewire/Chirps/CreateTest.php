<?php

namespace Tests\Feature\Livewire\Chirps;

use App\Livewire\Chirps\Create;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function renders_successfully(): void
    {
        Livewire::test(Create::class)->assertStatus(200);
    }

    /** @test */
    public function user_invalid_input(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $component = Livewire::test(Create::class)->set('', 'Created Chirp');
        $component->call('save');
        $component->assertHasErrors();
    }

    /** @test */
    public function user_can_create_chirps(): void
    {
        $this->assertDatabaseCount('chirps', 0);
        $user = User::factory()->create();
        $this->actingAs($user);
        $component = Livewire::test(Create::class)->set('message', 'Created Chirp');
        $component->call('save');
        $this->assertDatabaseCount('chirps', 1);
    }
}
