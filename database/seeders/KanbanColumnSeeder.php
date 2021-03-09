<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KanbanColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kanban_columns')->insert([
            'kanban_id' => '1',
            'column_color' => 'border-red-400',
            'column_name' => 'Backlog',
        ]);

        DB::table('kanban_columns')->insert([
            'kanban_id' => '1',
            'column_color' => 'border-blue-400',
            'column_name' => 'In Progress',
        ]);

        DB::table('kanban_columns')->insert([
            'kanban_id' => '1',
            'column_color' => 'border-purple-400',
            'column_name' => 'Feedback',
        ]);

        DB::table('kanban_columns')->insert([
            'kanban_id' => '1',
            'column_color' => 'border-green-400',
            'column_name' => 'Complete',
        ]);

        DB::table('kanban_columns')->insert([
            'kanban_id' => '2',
            'column_color' => 'border-red-400',
            'column_name' => 'To Do Tasks',
        ]);

        DB::table('kanban_columns')->insert([
            'kanban_id' => '2',
            'column_color' => 'border-yellow-400',
            'column_name' => 'In Progress',
        ]);

        DB::table('kanban_columns')->insert([
            'kanban_id' => '3',
            'column_color' => 'border-green-400',
            'column_name' => 'Questions',
        ]);
    }
}
