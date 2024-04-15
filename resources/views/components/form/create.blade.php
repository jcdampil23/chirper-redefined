@props([
    'reference' => 'editor',
])

<div class="w-full" x-init="() => creator = init($refs.{{ $reference }})" x-data="setupEditor(
    $wire.entangle('{{ $attributes->wire('model')->value() }}').live)" wire:ignore
     {{ $attributes->whereDoesntStartWith('wire:model') }}>
    <div class="mb-2 flex gap-2">
        <x-form.button
                       @click.prevent="creator.chain().focus().toggleBold().run()">
            B
        </x-form.button>
        <x-form.button
                       @click.prevent="creator.chain().focus().toggleItalic().run()">
            <i>I</i>
        </x-form.button>
        <x-form.button
                       @click.prevent="creator.chain().focus().toggleUnderline().run()">
            <u>U</u>
        </x-form.button>
        <x-form.button
                       @click.prevent="creator.chain().focus().toggleOrderedList().run()">
            1.
        </x-form.button>
        <x-form.button class="px-1"
                       @click.prevent="editor.chain().focus().toggleBulletList().run()">
            <svg class="w-8" id="list"
                 xmlns="http://www.w3.org/2000/svg"
                 enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                <path d="M7.5,8h14c0.6,0,1-0.4,1-1s-0.4-1-1-1h-14c-0.6,0-1,0.4-1,1S6.9,8,7.5,8z M21.5,11h-10c-0.6,0-1,0.4-1,1s0.4,1,1,1h10
 c0.6,0,1-0.4,1-1S22.1,11,21.5,11z M21.5,16h-6c-0.6,0-1,0.4-1,1s0.4,1,1,1h6c0.6,0,1-0.4,1-1S22.1,16,21.5,16z M3.5,6
 c-0.6,0-1,0.4-1,1s0.4,1,1,1s1-0.4,1-1S4.1,6,3.5,6z M7.5,11c-0.6,0-1,0.4-1,1s0.4,1,1,1s1-0.4,1-1S8.1,11,7.5,11z M11.5,16
 c-0.6,0-1,0.4-1,1s0.4,1,1,1s1-0.4,1-1S12.1,16,11.5,16z"></path>
            </svg>
        </x-form.button>
    </div>
    <div x-ref="{{ $reference }}">

    </div>
</div>
