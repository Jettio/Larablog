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
        $data = [
            [
                'name' => 'Non Avtor',
                'email'=> 'author_unknown@g.g',
                'password' => bcrypt('122122')
            ],
            [
                'name' => 'Avtor1',
                'email'=> 'author1@g.g',
                'password' => bcrypt('123123')
            ],
        ];
        DB::table('users')->insert($data);
    }
}
