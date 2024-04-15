<form class="sticky bottom-0 flex w-full flex-col bg-gray-800 pt-2"
      wire:submit="update">
    <div class="flex w-full justify-end rounded-md border-rose-400">
        <x-form.editor wire:model.live="message"></x-editor>
    </div>
    <div class="flex justify-end gap-4">
        <button class="mt-4 w-full rounded border border-rose-400 bg-gray-800 px-4 py-2 text-white hover:bg-rose-500 hover:text-white"
                wire:click.prevent="cancel">
            {{ __('Cancel') }}
        </button>
        <button
                class="mt-4 w-full rounded bg-rose-400 px-4 py-2 text-black hover:bg-rose-500 hover:text-white">
            {{ __('Edit') }}
        </button>
    </div>
</form>
