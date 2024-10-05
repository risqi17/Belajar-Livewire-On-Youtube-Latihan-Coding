<div>
    {{-- <input type="text" wire:model="todo">
    <button type="button" wire:click="add">Tambah</button> --}}

    {{-- <form wire:submit="add">
        <input type="text" wire:model="todo">
        <button type="submit">Tambah</button>
    </form> --}}

    <form wire:submit="add">
        {{-- <input type="text" wire:model.live.debounce.5ms="todo"> --}}
        {{-- <input type="text" wire:model.change="todo"> --}}
        <input type="text" wire:model.blur="todo">
        <span>Current Todo : {{ $todo }}</span>
        <button type="submit">Tambah</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
