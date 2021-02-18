<?php

namespace Database\Seeders;

use App\Models\TaskLists;
use Illuminate\Database\Seeder;
use DB;
use DateTime;

class TaskListsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('task_lists')->delete();

        $now = new DateTime();

        TaskLists::create([
            'task_id',
            'description',
        ]);

        TaskLists::create([
            'task_id',
            'description',
        ]);

        TaskLists::create([
            'task_id',
            'description',
        ]);
    }
}