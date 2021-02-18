<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Seeder;
use DB;
use DateTime;

class TaskStatusTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('task_status')->delete();

        $now = new DateTime();

        TaskStatus::create([ 
            'task_id' => 1,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);

        TaskStatus::create([ 
            'task_id' => 2,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);

        TaskStatus::create([ 
            'task_id' => 3,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'task_id' => 4,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);

        TaskStatus::create([ 
            'task_id' => 5,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'task_id' => 6,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'task_id' => 7,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'task_id' => 8,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'task_id' => 9,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'task_id' => 10,
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
    }
}