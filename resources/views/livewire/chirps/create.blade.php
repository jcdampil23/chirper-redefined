<form class="sticky bottom-0 flex w-full flex-col border-t border-t-rose-400 bg-gray-800 px-4 pb-4"
      wire:submit="save">
    <div class="flex w-full justify-start rounded-md border-rose-400">
        <x-form.create wire:model.live="message" reference="create"></x-create>
    </div>
    <x-form.error class="mt-2" :messages="$errors->get('message')" />
    <x-form.button> Chirp </x-form.button>
</form>
