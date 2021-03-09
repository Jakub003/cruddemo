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
        'task_title',
    ];

    public function KanbanTag()
    {
        return $this->belongsTo(Kanban::class);
    }
}
