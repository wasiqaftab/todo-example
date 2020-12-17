<?php

namespace App\Http\Livewire\Todo;

use App\Models\TodoList;
use Livewire\Component;

class Form extends Component
{

    public $title;

    protected $rules = [
        'title' => 'required|min:6'
    ];

    public function createItem()
    {
        $this->validate();

        $item = new TodoList();
        $item->title = $this->title;
        $item->save();

        $this->emit('created');
    }
    public function render()
    {
        return view('livewire.todo.form');
    }
}
