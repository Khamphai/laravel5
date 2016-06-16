<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'Khamphai';
        $user->email ='pphai67@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
