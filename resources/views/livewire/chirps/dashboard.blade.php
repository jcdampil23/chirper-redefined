<div class="flex min-h-screen flex-col justify-between" wire:id="dashboard">
    <div class="">
        <div
             class="sticky top-0 z-10 flex w-full flex-col gap-4 bg-gray-400 bg-opacity-10 px-4 py-4 font-bold backdrop-blur">
            <!-- <svg style="enable-background:new 0 0 40 40;" height="30" width="30" version="1.1" viewBox="0 0 512 512" -->
            <!--     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> -->
            <!--     <polygon fill="#fb503b" points="352,128.4 319.7,96 160,256 160,256 160,256 319.7,416 352,383.6 224.7,256 "/> -->
            <!-- </svg> -->
            <p>Dashboard</p>
        </div>
        <div class="flex flex-col pb-4">
            @foreach ($chirps as $chirp)
                <livewire:chirps.chirp :chirp="$chirp"
                                       wire:key="{{ $chirp->id }}" />
            @endforeach
        </div>
    </div>

    <livewire:chirps.create />

</div>
