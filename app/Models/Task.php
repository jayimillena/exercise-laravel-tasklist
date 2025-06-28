<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;    

class Task extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'description',
        'long_description',
    ];

    public function toggleCompleted()
    {
        $this->completed = !$this->completed;
        $this->save();
    }
}
