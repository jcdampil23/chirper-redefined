<div class="relative flex space-x-2 border-t border-t-rose-400 p-4">
    <div class="flex-1">
        <div
             class="relative z-0 flex items-start justify-between text-white dark:text-gray-400">
            <div class="flex flex-col text-sm">
                <span
                      class="text-sm font-bold text-white">{{ $chirp->user->name }}
                </span>
                <div>
                    <small>{{ $chirp->created_at->format('j M Y, g:i a') }}</small>
                    @unless ($chirp->created_at->eq($chirp->updated_at))
                        <small> &middot; {{ __('edited') }}</small>
                    @endunless
                </div>
            </div>
            <button class="flex justify-start"
                    wire:click="openDropdown">...</button>
        </div>
        @if ($editing)
            <livewire:chirps.edit :chirp='$chirp' />
        @else
            <x-form.view-editor>{{ $chirp->message }}</x-form.view-editor>
        @endif
        @if ($open)
            <div
                 class="absolute right-2 top-2 z-[999] w-32 rounded border border-rose-400 bg-gray-800 shadow shadow-rose-400">
                <ul class="w-full">
                    <li>
                        <button class="w-full cursor-pointer rounded-t-md border-b border-b-rose-400/20 px-4 py-2 hover:bg-gray-700"
                                wire:click.prevent="edit">
                            Edit
                        </button>
                    </li>
                    <li>
                        <button class="relative z-[999] w-full cursor-pointer rounded-t-md border-b border-b-rose-400/20 px-4 py-2 hover:bg-gray-700"
                                wire:click.prevent="delete">
                            Delete
                        </button>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</div>
