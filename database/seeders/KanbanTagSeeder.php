<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KanbanTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kanban_tags')->insert([
            'kanban_id' => '1',
            'tag_color' => 'bg-red-200 text-white hover:bg-red-500 active:bg-red-500',
            'tag_icon' => 'bi bi-alarm-fill',
            'tag_name' => 'Bugs',
        ]);

        DB::table('kanban_tags')->insert([
            'kanban_id' => '1',
            'tag_color' => 'bg-blue-200 text-white hover:bg-blue-500 active:bg-blue-500',
            'tag_icon' => 'bi bi-alarm-fill',
            'tag_name' => 'Layouts',
        ]);

        DB::table('kanban_tags')->insert([
            'kanban_id' => '2',
            'tag_color' => 'bg-green-200 text-white hover:bg-green-500 active:bg-green-500',
            'tag_icon' => 'bi bi-alarm-fill',
            'tag_name' => 'Test',
        ]);

        DB::table('kanban_tags')->insert([
            'kanban_id' => '3',
            'tag_color' => 'bg-purple-200 text-white hover:bg-purple-500 active:bg-purple-500',
            'tag_icon' => 'bi bi-alarm-fill',
            'tag_name' => 'Testing',
        ]);

        
    }
}
