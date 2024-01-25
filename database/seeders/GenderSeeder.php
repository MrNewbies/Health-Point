<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_of_gender = [
            ['id' => 'GN000', 'gendername' => 'Required'],
            ['id' => 'GN001', 'gendername' => 'Male'],
            ['id' => 'GN002', 'gendername' => 'Female']
        ];

        DB::table('genders')->insert($list_of_gender);
    }
}
