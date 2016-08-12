<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Angelo Marucci',
            'email' => 'a.marucci@ifarhu.gob.pa',
            'password' => bcrypt('secret'),
        ]);
    }
}
