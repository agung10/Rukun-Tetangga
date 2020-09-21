<?php

use Illuminate\Database\Seeder;

class StatusKeluargaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\StatusKeluarga::insert([
            [
                'hub_keluarga' => 'Kakek',
                'created_at'   => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at'   => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'hub_keluarga' => 'Nenek',
                'created_at'   => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at'   => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'hub_keluarga' => 'Ayah',
                'created_at'   => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at'   => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'hub_keluarga' => 'Ibu',
                'created_at'   => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at'   => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'hub_keluarga' => 'Kakak',
                'created_at'   => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at'   => \Carbon\Carbon::now('Asia/jakarta')
            ],
            [
                'hub_keluarga' => 'Adik',
                'created_at'   => \Carbon\Carbon::now('Asia/jakarta'),
                'updated_at'   => \Carbon\Carbon::now('Asia/jakarta')
            ],
        ]);
        
    }
}
