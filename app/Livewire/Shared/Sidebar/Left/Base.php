<?php

namespace App\Livewire\Shared\Sidebar\Left;

use App\Livewire\Shared\Actions\Logout;
use Livewire\Component;

class Base extends Component
{
    public function redirectTo($url)
    {
        $this->redirectIntended(default: route($url, absolute: false), navigate: true);
    }

    public function logout(Logout $logout): void
    {
        $logout();
    }

    public function render()
    {
        return view('livewire.shared.sidebar.left.base');
    }
}
