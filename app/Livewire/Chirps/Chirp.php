<?php

namespace App\Livewire\Chirps;

use App\Models\Chirps\ChirpModel;
use Livewire\Attributes\On;
use Livewire\Component;

class Chirp extends Component
{
    public ChirpModel $chirp;
    public $open = false;

    public $editing = false;

    public function closeEdit(): void
    {
        $this->editing = false;
    }

    public function openEdit(): void
    {
        $this->editing = true;
    }

    public function closeDropdown(): void
    {
        $this->open = false;
    }
    public function openDropdown(): void
    {
        $this->open = true;
    }

    public function edit(): void
    {
        $this->openEdit();
        $this->closeDropdown();
    }

    #[On('edit-closed.{chirp.id}')]
    public function editCancel(): void
    {
        $this->closeDropdown();
        $this->closeEdit();
    }

    public function delete(): void
    {
        $this->authorize('delete', $this->chirp);
        $this->chirp->delete();
        $this->dispatch('chirp-updated');
    }

    public function render()
    {
        return view('livewire.chirps.chirp');
    }
}
