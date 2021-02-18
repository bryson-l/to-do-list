<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskPrioritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_priorities', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('priority_code');

            $table->nullableTimestamps();
             // constraints
             $table->foreign('task_id')->references('id')->on('tasks');
             $table->foreign('priority_code')->references('id')->on('priority_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_priorities');
    }
}
