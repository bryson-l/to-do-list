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
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);

        TaskStatus::create([ 
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);

        TaskStatus::create([ 
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);

        TaskStatus::create([ 
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
        
        TaskStatus::create([ 
            'complete' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
    }
}