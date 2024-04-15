<?php

namespace App\Livewire\Authentication;

use App\Livewire\Authentication\Forms\LoginForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->form->validate();
        $this->form->authenticate();
        Session::regenerate();
        return redirect()->to('dashboard');
    }

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.authentication.login');
    }
}
