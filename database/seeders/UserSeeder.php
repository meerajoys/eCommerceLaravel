<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        // User::factory(10)->create();

        DB::table('users')->insert([
            "name"=>"Anns",
            "email"=>"anns@gmail.com",
            "password"=>Hash::make("12345")
        ]);
    }
}
