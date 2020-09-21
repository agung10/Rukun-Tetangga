<?php

use Illuminate\Database\Seeder;

class StatusKKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\StatusKartuKeluarga::insert([
            [
                'hub_kk'       => 'Kepala Keluarga',
                'created_at' => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'hub_kk'       => 'Istri',
                'created_at' => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'hub_kk'       => 'Anak',
                'created_at' => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/jakarta')
            ],
        ]);
    }
}
