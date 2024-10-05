<div>
    Counter : {{ $count }}

    {{-- <button wire:click="increment">+</button> --}}
    {{-- <button wire:mouseenter="increment">+</button> --}}
    {{-- <button wire:click.window="increment">+</button> --}}
    {{-- <button wire:click.throttle.1000ms="increment">+</button> --}}
    <button wire:click="increment(3)">+</button>
    
    
    <button wire:click="decrement(3)">-</button>



</div>
