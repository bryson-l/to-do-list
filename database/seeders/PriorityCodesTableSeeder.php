<?php

namespace Database\Seeders;

use App\Models\PriorityCodes;
use Illuminate\Database\Seeder;
use DB;
use DateTime;

class PriorityCodesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('priority_codes')->delete();

        $now = new DateTime();

        PriorityCodes::create([
            'description' => 'Urgent',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        PriorityCodes::create([
            'description' => 'Important',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        PriorityCodes::create([
            'description' => 'Ignore',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL
        ]);

        PriorityCodes::create([
            'description' => 'Optional',
            'created_at' => $now,
            'updated_at' => NULL,
            'deleted' => False,
            'deleted_date' => NULL
        ]);
    }
}