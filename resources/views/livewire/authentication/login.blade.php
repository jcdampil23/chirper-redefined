<form class="flex flex-col justify-center gap-16 border border-red-400/20 p-4 shadow-md shadow-red-400/20"
      wire:submit="login">
    <div class="grid justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="auto"
             viewBox="0 0 84.1 57.6">
            <title>laravel</title>
            <path fill="#fb503b"
                  d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z" />
        </svg>
    </div>
    <div class="grid gap-2 p-2 md:p-4">
        <p class="mb-4 text-center text-2xl font-bold uppercase">Login</p>

        <div>
            <x-form.label for="email">Email</x-form.label>
            <x-form.input id="email" name="email" type="text"
                          wire:model="form.email" />
            <x-form.error class="mt-2" :messages="$errors->get('form.email')" />
        </div>

        <div>
            <x-form.label for="password">Password</x-form.label>
            <x-form.input id="password" name="password" type="password"
                          wire:model="form.password" />
            <x-form.error class="mt-2" :messages="$errors->get('form.password')" />
        </div>

        <div class="flex items-center justify-between">
            <div class="flex gap-4">
                <input class="block text-black" id="remember" name="remember"
                       type="checkbox" wire:model='form.remember' autofocus />
                <label class="block w-auto text-sm font-medium text-black text-white/50"
                       for="remember">
                    Remember me
                </label>
            </div>
            <a class="text-sm" href="register">Register</a>
        </div>
        <x-form.button type="submit">Login</x-form.button>
    </div>
</form>
