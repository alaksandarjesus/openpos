<?php

use Illuminate\Database\Seeder;
use App\User as User;
use Illuminate\Support\Facades\Hash;

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
        $user = array(
            "employeeId"=>"cc_001",
            "name"=>"Alaksandar Jesus Gene", 
            "alias"=>"alaksandar-jesus-gene", 
            "mobile"=>"9952762769",
            "password"=>Hash::make("password@123"),
            "role_id"=>1
            );

        User::create($user);
    }
}
