<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('roles')->insert([
            'name' => 'User',
            'description' => 'System User Privileges',
        ]);
    }
}
