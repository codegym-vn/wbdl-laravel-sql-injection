<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataArray = [];
        for ($i = 0; $i < 20; $i++) {
            $dataArray[] = [
                'name' => Str::random(10),
                'dob' => now()->subYears(mt_rand(18, 60))->subDays(mt_rand(1, 365)),
                'email' => Str::random(10) . '@gmail.com',
            ];
        }
        DB::table('customers')->insert($dataArray);
    }
}
