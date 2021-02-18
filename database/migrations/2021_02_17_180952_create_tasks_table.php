<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('task_list_id');
            $table->unsignedBigInteger('status_id');
            $table->string('description');
            $table->boolean('deleted');
            $table->softDeletes($column = 'deleted_date', $precision = 0);

            $table->nullableTimestamps();
            // constraints
            $table->foreign('task_list_id')->references('id')->on('task_lists');
            $table->foreign('status')->references('id')->on('task_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
