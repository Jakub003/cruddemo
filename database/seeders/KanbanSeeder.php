<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KanbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kanbans')->insert([
            'color' => 'bg-green-200 text-green-500',
            'icon' => 'bi bi-alarm-fill',
            'title' => 'Alarm Project',
        ]);

        DB::table('kanbans')->insert([
            'color' => 'bg-blue-200 text-blue-500',
            'icon' => 'bi bi-archive-fill',
            'title' => 'Random Project',
        ]);

        DB::table('kanbans')->insert([
            'color' => 'bg-red-200 text-red-500',
            'icon' => 'bi bi-arrow-left-circle-fill',
            'title' => 'Arrow Project',
        ]);
    }
}
