<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'regionals' )->insert([
            [
            'province' => ' jawabarat', 
            'district' => 'bandung', 
            ],
            
            [
                'province' => 'jawatengah', 
                'district' => 'salatiga',
            ],
            
            [
                'province' => 'jawatimur',
                'district' => 'surabaya',
            ],
        ]);
    }
}
