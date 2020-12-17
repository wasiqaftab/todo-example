<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'todolist';
    /**
     * @var false|mixed
     */
    private $is_completed;
    /**
     * @var mixed
     */
    private $title;
}
