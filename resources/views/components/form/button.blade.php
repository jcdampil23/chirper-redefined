<button {!! $attributes->merge([
    'class' =>
        'mt-4 rounded bg-rose-400 px-4 py-2 text-black hover:bg-rose-500 hover:text-white',
]) !!}>{{ $slot }}</button>
