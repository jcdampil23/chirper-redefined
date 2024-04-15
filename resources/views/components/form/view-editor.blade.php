<div class="w-full" x-init="() => editor = init($refs.editor)"
     @refresh.window="()=>init($refs.editor)" wire:ignore x-data="viewEditor(
         '{{ $slot }}')">
    <div x-ref="editor">
    </div>
</div>
