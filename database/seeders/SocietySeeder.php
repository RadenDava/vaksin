<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class SocietySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'societies' )->insert([
            [
                'id_card_number'  => '12345678',
                'password'  => Hash::make('121212'),
                'name'  => 'omar',
                'birthday'  => '1990-04-18',
                'gender'  => 'male',
                'address'  => 'Jln. Kebon Jeruk No. 479',
                'regional_id'  => 1,
            ],

            [
                'id_card_number'  => '11111111', 
                'password'  => Hash::make('121212'),
                'name'  => 'nilam',
                'birthday'  =>'2000-04-18',
                'gender'  => 'female',
                'address'  => 'Jln. Kebon Jeruk No. 479, Salatiga',
                'regional_id'  => 2,
            ],

            [
                'id_card_number'  =>  '87654321',
                'password'  => Hash::make('121212'),
                'name'  => 'arek',
                'birthday'  => '2000-04-09',
                'gender'  => 'male',
                'address'  => 'Jln. Kebon Jeruk No. 479, Surabaya',
                'regional_id'  => 3,
            ],
        ]);
    }
}
