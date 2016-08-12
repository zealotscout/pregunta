<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'id' => '1',
            'title' => 'Como hacer para crear un nuevo usuario?',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam accusamus amet, exercitationem similique praesentium? Incidunt commodi earum error modi pariatur illum doloribus dolore amet, praesentium, exercitationem fugit enim blanditiis a!',
            'user_id' => '1'
        ]);

        DB::table('posts')->insert([
            'id' => '2',
            'title' => 'Como hacer para crear un nuevo trabajo?',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam accusamus amet, exercitationem similique praesentium? Incidunt commodi earum error modi pariatur illum doloribus dolore amet, praesentium, exercitationem fugit enim blanditiis a!',
            'user_id' => '1'
        ]);
    }
}
