<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{

    public $todo;

    public $todos = [
        'Belajar Livewire',
        'Makan Siang'
    ];


    public function add(){
        // dd('gas');

        $this->todos[] = $this->todo;

        $this->reset('todo');

    }
    public function render()
    {
        return view('livewire.todos');
    }
}
