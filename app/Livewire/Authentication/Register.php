<?php

namespace App\Livewire\Authentication;

use App\Livewire\Authentication\Forms\RegisterForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    public RegisterForm $form;

    public function register()
    {
        $user = $this->form->save();
        Auth::login($user);

        return $this->redirect('/dashboard', navigate: true);
    }

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.authentication.register');
    }
}
