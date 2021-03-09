<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKanbanTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanban_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kanban_id')->constrained();// there is no need of this column
            $table->foreignId('kanban_column_id')->nullable();
            $table->foreignId('kanban_tag_id')->nullable();
            $table->foreignId('kanban_page_id')->nullable();//there is no need of that column
            $table->foreignId('kanban_tag_id')->nullable();
            $table->string('task_title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kanban_tasks');
    }
}
