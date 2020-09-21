<?php

use Illuminate\Database\Seeder;

class StatusPernikahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\StatusPernikahan::insert([
            [
                'pernikahan'       => 'Belum Kawin',
                'created_at' => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'pernikahan'       => 'Kawin',
                'created_at' => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'pernikahan'       => 'Cerai Hidup',
                'created_at' => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'pernikahan'       => 'Cerai Mati',
                'created_at' => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/jakarta')
            ],
        ]);
    }
}
