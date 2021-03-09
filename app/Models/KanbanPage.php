<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanbanPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'kanban_id', 
        'page_name'
    ];

    public function KanbanPage()
    {
        return $this->belongsTo(Kanban::class);
    }
}
