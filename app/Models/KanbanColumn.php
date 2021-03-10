<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanbanColumn extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kanban_id', 
        'column_color',
        'column_name'
    ];

    public function KanbanColumn()
    {
        return $this->belongsTo(Kanban::class);
    }

    public function tasks(){
        return $this->hasMany('App\Models\KanbanTask');
    }
}
