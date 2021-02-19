<?php

namespace Database\Seeders;

use App\Models\TaskPriorities;
use Illuminate\Database\Seeder;
use DB;
use DateTime;

class TaskPrioritiesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('task_priorities')->delete();

        $now = new DateTime();

        TaskPriorities::create([
            'task_id' => 1,
            'priority_code' => 1,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        TaskPriorities::create([
            'task_id' => 2,
            'priority_code' => 2,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        TaskPriorities::create([
            'task_id' => 3,
            'priority_code' => 2,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        TaskPriorities::create([
            'task_id' => 4,
            'priority_code' => 1,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        TaskPriorities::create([
            'task_id' => 5,
            'priority_code' => 1,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        TaskPriorities::create([
            'task_id' => 6,
            'priority_code' => 2,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        TaskPriorities::create([
            'task_id' => 7,
            'priority_code' => 4,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        TaskPriorities::create([
            'task_id' => 8,
            'priority_code' => 1,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        TaskPriorities::create([
            'task_id' => 9,
            'priority_code' => 2,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);
        
        TaskPriorities::create([
            'task_id' => 10,
            'priority_code' => 4,
            'created_at' => $now,
            'deleted' => False,
            'deleted_date' => NULL
        ]);
    }
}