<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KanbanTag;

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

    public function KanbanTag()
    {
        return $this->belongsTo(KanbanTag::class, 'kanban_tag_id');
    }


}
