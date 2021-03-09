<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Kanban
        $this->call(KanbanSeeder::class);
        $this->call(KanbanPageSeeder::class);
        $this->call(KanbanTagSeeder::class);
        $this->call(KanbanColumnSeeder::class);
        $this->call(KanbanTaskSeeder::class);
    }
}
