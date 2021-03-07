<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanbanTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'kanban_id', 
        'tag_color',
        'tag_icon',
        'tag_name'
    ];

    public function KanbanTag()
    {
        return $this->belongsTo(Kanban::class);
    }
}
