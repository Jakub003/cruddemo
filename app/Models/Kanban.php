<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanban extends Model
{
    use HasFactory;

    protected $fillable = [
        'kanban_color',
        'kanban_icon',
        'kanban_title'
    ];

    public function tags(){
        return $this->hasMany('App\Models\KanbanTag');
    }

    public function columns(){
        return $this->hasMany('App\Models\KanbanColumn');
    }

    public function pages(){
        return $this->hasMany('App\Models\KanbanPage');
    }

    // public function tasks(){
    //     return $this->hasMany('App\Models\KanbanTask');
    // }
}
