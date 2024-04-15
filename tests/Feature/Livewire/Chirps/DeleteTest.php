<?php

namespace Tests\Feature\Livewire\Chirps;

use App\Livewire\Chirps\Chirp;
use App\Models\Chirps\ChirpModel;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $chirp = ChirpModel::factory()->forUser($user)->create();
        Livewire::test(Chirp::class, ['chirp' => $chirp])->assertStatus(200);
    }

    /** @test */
    public function deletes_successfully(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $chirp = ChirpModel::factory()->forUser($user)->create();
        Livewire::test(Chirp::class, ['chirp' => $chirp])->call('delete');
        $this->assertDatabaseCount('chirps', 0);
    }
}
