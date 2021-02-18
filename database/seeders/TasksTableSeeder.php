<?php

namespace Database\Seeders;

use App\Models\Tasks;
use Illuminate\Database\Seeder;
use DB;
use DateTime;

class TasksTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('tasks')->delete();

        $now = new DateTime();

        Tasks::create([ 
            'task_list_id' => 1,
            'status_id' => 1,
            'description' => 'finish these seeders',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);

        Tasks::create([ 
            'task_list_id' => 1,
            'status_id' => 2,
            'description' => 'figure out middle layer (getting data from database to frontend)',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);

        Tasks::create([ 
            'task_list_id' => 1,
            'status_id' => 3,
            'description' => 'blast out the front-end rq',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);
        
        Tasks::create([ 
            'task_list_id' => 1,
            'status_id' => 4,
            'description' => 'learn authorization',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);

        Tasks::create([ 
            'task_list_id' => 2,
            'status_id' => 5,
            'description' => 'john should do this first',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);
        
        Tasks::create([ 
            'task_list_id' => 2,
            'status_id' => 6,
            'description' => 'john should do this second',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);
        
        Tasks::create([ 
            'task_list_id' => 2,
            'status_id' => 7,
            'description' => 'john should do this third',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);
        
        Tasks::create([ 
            'task_list_id' => 3,
            'status_id' => 8,
            'description' => 'sam should do this first',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);
        
        Tasks::create([ 
            'task_list_id' => 3,
            'status_id' => 9,
            'description' => 'sam should do this second',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);
        
        Tasks::create([ 
            'task_list_id' => 3,
            'status_id' => 10,
            'description' => 'sam should do this third',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL,
        ]);
    }
}