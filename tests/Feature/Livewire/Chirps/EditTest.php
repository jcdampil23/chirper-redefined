<?php

namespace Tests\Feature\Livewire\Chirps;

use App\Livewire\Chirps\Edit;
use App\Models\Chirps\ChirpModel;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $chirp = ChirpModel::factory()->forUser($user)->create();

        Livewire::test(Edit::class, ['chirp' => $chirp])->assertStatus(200);
    }

    /** @test */
    public function invalid_input(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $chirp = ChirpModel::factory()->forUser($user)->create();

        $component = Livewire::test(Edit::class, ['chirp' => $chirp]);
        $component->set('message', '');
        $component->call('update');
        $component->assertHasErrors();
    }

    /** @test */
    public function can_edit_chirp(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $chirp = ChirpModel::factory()->forUser($user)->create();

        $component = Livewire::test(Edit::class, ['chirp' => $chirp]);
        $component->set('message', 'Edited');
        $component->call('update');
        $component->assertHasNoErrors();

        $updatedChirp = ChirpModel::find($chirp->id);
        $this->assertSame($updatedChirp->message, 'Edited');
    }
}
