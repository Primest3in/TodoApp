<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todoCreate extends Model
{
    use HasFactory;

    protected $table = 'todo_creates';
    protected $primary_key = 'id';
}
