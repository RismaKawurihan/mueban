<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // //Create a new user
        // $user = new \App\Models\User();
        // $user->name = 'Admin';
        // $user->phone = '081234567890';
        // $user->email = 'admin@gmail.com';
        // $user->password = bcrypt('admin1234');
        // $user->save();


        //insert multiple users
        $user = [
            [
                'name' => 'Risma Kawurihan',
                'phone' => '0877992312',
                'email' => 'rismakawurihan@gmail.com',
                'password' => bcrypt('1234567'),
            ],
            [
                'name' => 'user',
                'phone' => '081234567862',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
            ],
        ];

        //Insert teh user into the database
        DB::table('users')->insert($user);
    }
}
