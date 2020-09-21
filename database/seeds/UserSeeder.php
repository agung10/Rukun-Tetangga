<?php

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
        \DB::table('users')->truncate();

        \App\User::insert([
            [
                
                'name'       => 'admin',
                'email'      => 'admin@gmail.com',
                'password'   => \Hash::make("Admin12345"),
                'password_'  => 'Admin12345',
                'no_telp'    => '081318612712',
                'level'      => 'Administrator',
                'api_token'  => \Str::random(50),
                'created_at' => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/jakarta')
            ]
        ]);
    }
}
