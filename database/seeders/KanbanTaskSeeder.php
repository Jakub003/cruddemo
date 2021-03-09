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
            'kanban_id' => '1',
            'kanban_column_id' => '1',
            'kanban_page_id' => '1',
            'task_title' => 'create mockup',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '1',
            'kanban_page_id' => '1',
            'task_title' => 'find logo',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '1',
            'kanban_page_id' => '1',
            'task_title' => 'creating social media accounts',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '2',
            'kanban_page_id' => '1',
            'task_title' => 'youtube background design',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '2',
            'kanban_page_id' => '1',
            'task_title' => 'home page design',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '2',
            'kanban_page_id' => '2',
            'task_title' => 'profle design',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '2',
            'kanban_page_id' => '2',
            'task_title' => 'profle seeders and basic crud',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '4',
            'kanban_page_id' => '2',
            'task_title' => 'profile mockup',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '3',
            'kanban_page_id' => '3',
            'task_title' => 'dashboard basic crud',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '3',
            'kanban_page_id' => '3',
            'task_title' => 'dashboard mockup',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '4',
            'kanban_page_id' => '3',
            'task_title' => 'dashboard ideas',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '1',
            'kanban_page_id' => '4',
            'task_title' => 'kanban layout',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '2',
            'kanban_page_id' => '4',
            'task_title' => 'adobe xd mockup',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '3',
            'kanban_page_id' => '4',
            'task_title' => 'kanban seeders ',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '1',
            'kanban_column_id' => '4',
            'kanban_page_id' => '4',
            'task_title' => 'kanban pages design ',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '2',
            'kanban_column_id' => '5',
            'kanban_page_id' => '5',
            'task_title' => 'testing ideas ',
        ]);

        DB::table('kanban_tasks')->insert([
            'kanban_id' => '3',
            'kanban_column_id' => '7',
            'kanban_page_id' => '8',
            'task_title' => 'arrow project test ',
        ]);
       
    }
}
