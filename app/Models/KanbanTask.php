<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanbanTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'kanban_id',
        'kanban_column_id',
        'kanban_page_id', 
        'kanban_tag_id', 
        'task_title',
    ];

    public function KanbanTask()
    {
        return $this->belongsTo(KanbanColumn::class);
    }

    public function tag(){
        return $this->hasMany('App\Models\KanbanTag');
    }
}
