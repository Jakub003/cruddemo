<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KanbanTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kanban_tasks')->insert([
            'kanban_column_id' => '1',
            'task_title' => 'create crud layout',
        ]);
        DB::table('kanban_tasks')->insert([
            'kanban_column_id' => '1',
            'task_title' => 'design dashboard',
        ]);
        DB::table('kanban_tasks')->insert([
            'kanban_column_id' => '1',
            'task_title' => 'add features',
        ]);
        DB::table('kanban_tasks')->insert([
            'kanban_column_id' => '2',
            'task_title' => 'page models',
        ]);
        DB::table('kanban_tasks')->insert([
            'kanban_column_id' => '3',
            'task_title' => 'alpine js accordian guide',
        ]);
        DB::table('kanban_tasks')->insert([
            'kanban_column_id' => '4',
            'task_title' => 'user authentication',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_column_id' => '5',
            'task_title' => 'testing titles',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_column_id' => '6',
            'task_title' => 'another demo title',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_column_id' => '7',
            'task_title' => 'final title test',
        ]);
    }
}
