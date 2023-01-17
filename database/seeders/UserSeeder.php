<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new \App\Models\User();
        $admin->name = "Admin";
        $admin->email = "Nazalaputri@gmail.com";
        $admin->password = bcrypt("nazalaapn");
        $admin->role = "admin";
        $admin->save();
    }
}
