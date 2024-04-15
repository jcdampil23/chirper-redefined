<?php

namespace App\Livewire\Chirps;

use App\Models\Chirps\ChirpModel;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public ChirpModel $chirp;

    #[Validate('required|string|max:255')]
    public $message = '';

    public function mount(): void
    {
        $this->message = $this->chirp->message;
    }

    public function update(): void
    {
        $validated = $this->validate();
        $this->authorize('update', $this->chirp);
        $this->chirp->update($validated);
        $this->dispatch('edit-closed.' . $this->chirp->id);
        $this->dispatch('chirp-updated');
    }

    public function cancel(): void
    {
        $this->dispatch('edit-closed.' . $this->chirp->id);
    }

    public function render()
    {
        return view('livewire.chirps.edit');
    }
}
