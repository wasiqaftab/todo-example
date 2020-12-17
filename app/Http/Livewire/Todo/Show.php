<?php

namespace App\Http\Livewire\Todo;

use App\Models\TodoList;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Show extends Component
{

    /**
     * @var string[]
     */
    protected $listeners = ['created'];

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        $list = TodoList::all()->sortByDesc('created_at');

        return view('livewire.todo.show', [ 'list' => $list ]);
    }

    /**
     * @param TodoList $item
     */
    public function markAsDone(TodoList $item): void
    {
        $item->is_completed = true;
        $item->save();
    }

    /**
     * @param TodoList $item
     */
    public function markAsToDo(TodoList $item): void
    {
        $item->is_completed = false;
        $item->save();
    }

    /**
     * @param TodoList $item
     *
     * @throws \Exception
     */
    public function deleteItem(TodoList $item): void
    {
        $item->delete();
    }

    public function created(): void
    {
        $this->render();
    }

}
