<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use DB;
use DateTime;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('users')->delete();

        $now = new DateTime();

        Users::create([
            'first_name' => 'Bryson',
            'last_name' => 'Longoria',
            'username' => 'bryson326',
            'password' => 'password',
            'admin' => True,
            'created_at' => $now,
            'updated_at' => NULL
        ]);

        Users::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'username' => 'johndoe',
            'password' => 'password',
            'admin' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);

        Users::create([
            'first_name' => 'Sam',
            'last_name' => 'Sanderson',
            'username' => 'samsanderson',
            'password' => 'password',
            'admin' => False,
            'created_at' => $now,
            'updated_at' => NULL
        ]);
    }
}