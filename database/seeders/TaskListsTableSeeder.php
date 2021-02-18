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

        TaskLists::create([ // task list for Bryson Longoria (user_id: 1)
            'user_id' => 1,
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);

        TaskLists::create([ // task list for John Doe (user_id: 2)
            'user_id' => 2,
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);

        TaskLists::create([ // task list for Sam Sanderson (user_id: 3)
            'user_id' => 3,
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);
    }
}