<form class="sticky bottom-0 flex w-full flex-col border-t border-t-rose-400 bg-gray-800 px-4 pb-4"
      wire:submit="save">
    <div class="flex w-full justify-start rounded-md border-rose-400">
        <x-form.editor wire:model.live="message"></x-editor>
    </div>
    <x-form.button> Chirp </x-form.button>
</form>
