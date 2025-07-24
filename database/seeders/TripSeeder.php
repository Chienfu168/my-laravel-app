<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trip;
use Illuminate\Support\Carbon;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trip::create([
            'person' => '張小華',
            'description' => '參加教育論壇',
            'date' => Carbon::parse('2025-07-15'),
            'location' => '台北市',
            'amount' => 1200,
        ]);

        Trip::create([
            'person' => '林大明',
            'description' => '拜訪合作單位',
            'date' => Carbon::parse('2025-07-20'),
            'location' => '高雄市',
            'amount' => 2650,
        ]);

        Trip::create([
            'person' => '陳美玉',
            'description' => '參加工作坊',
            'date' => Carbon::parse('2025-07-21'),
            'location' => '台中市',
            'amount' => 980,
        ]);
    }
}
