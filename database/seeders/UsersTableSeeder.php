<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $param = [
        //     'name' => 'test',
        //     'email' => 'test@sample.com',
        //     'password' => 'testtest',
        // ];
        $param = [
            'name' => 'tost',
            'email' => 'tost@tost.com',
            'email_verified_at' => now(),
            'password' => 'tosttost',
            'remember_token' => Str::random(10),
        ];
        DB::table('users')->insert($param);
    }
}
