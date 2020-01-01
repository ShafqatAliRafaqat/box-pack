<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $users = 10;

        $faker = Factory::create();
       
        for( $j = 1; $j<=$users; $j++ ) {           
            $user = User::create([
                'name' => $faker->name,
                'email' => ($j==1) ? "admin@admin.com": $faker->email,
                'remember_token' => str_random(10),
                'password' => bcrypt('123456'),
           ]);
        }
    }
}
