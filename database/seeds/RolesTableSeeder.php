<?php

use Illuminate\Database\Seeder;
use App\Models\Roles as Roles;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = array(
            array(
                "name"=>"Administrator",
                "alias"=>"administator",
                "created_by"=>1
            ),
            array(
                "name"=>"Manager",
                "alias"=>"manager",
                "created_by"=>1
            ),
            array(
                "name"=>"Supervisor",
                "alias"=>"supervisor",
                "created_by"=>1
            ),
            array(
                "name"=>"Cashier",
                "alias"=>"cashier",
                "created_by"=>1
            )

        );

        foreach($roles as $role){
            Roles::create($role);
        };

    }
}
