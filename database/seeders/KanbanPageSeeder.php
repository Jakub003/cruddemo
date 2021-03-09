<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KanbanPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kanban_pages')->insert([
            'kanban_id' => '1',
            'page_name' => 'home-page',
        ]);

        DB::table('kanban_pages')->insert([
            'kanban_id' => '1',
            'page_name' => 'user-profile',
        ]);

        DB::table('kanban_pages')->insert([
            'kanban_id' => '1',
            'page_name' => 'dashboard',
        ]);

        DB::table('kanban_pages')->insert([
            'kanban_id' => '1',
            'page_name' => 'kanban-design',
        ]);

        DB::table('kanban_pages')->insert([
            'kanban_id' => '2',
            'page_name' => 'ideas',
        ]);

        DB::table('kanban_pages')->insert([
            'kanban_id' => '2',
            'page_name' => 'test',
        ]);

        DB::table('kanban_pages')->insert([
            'kanban_id' => '2',
            'page_name' => 'designs',
        ]);

        DB::table('kanban_pages')->insert([
            'kanban_id' => '3',
            'page_name' => 'product-design',
        ]);

        DB::table('kanban_pages')->insert([
            'kanban_id' => '3',
            'page_name' => 'marketing',
        ]);


    }
}
