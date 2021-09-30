<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('logins')->insert([
            'name'=>'shahin',
            'email'=>'shahin@gmail.com',
            'password'=>Hash::make('shahin')
        ]);
    }
}
