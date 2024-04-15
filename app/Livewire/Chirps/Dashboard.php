<?php

namespace App\Livewire\Chirps;

use App\Models\Chirps\ChirpModel;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public Collection $chirps;

    public function mount(): void
    {
        $this->getChirps();
    }

    #[On('chirp-created')]
    #[On('chirp-updated')]
    public function getChirps(): void
    {
        $this->chirps = ChirpModel::with('user')->latest()->get();
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.chirps.dashboard');
    }
}
