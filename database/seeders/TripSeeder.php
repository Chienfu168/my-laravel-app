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

        Trip::create([
            'person' => '王小明',
            'description' => '出席專案會議',
            'date' => Carbon::parse('2025-07-22'),
            'location' => '新竹市',
            'amount' => 1430,
        ]);

        Trip::create([
            'person' => '李春花',
            'description' => '實地考察校園',
            'date' => Carbon::parse('2025-07-23'),
            'location' => '彰化縣',
            'amount' => 1100,
        ]);

        Trip::create([
            'person' => '趙建國',
            'description' => '出差開會',
            'date' => Carbon::parse('2025-07-24'),
            'location' => '花蓮縣',
            'amount' => 1580,
        ]);

        Trip::create([
            'person' => '吳欣怡',
            'description' => '演講與交流',
            'date' => Carbon::parse('2025-07-25'),
            'location' => '台南市',
            'amount' => 1960,
        ]);

        Trip::create([
            'person' => '陳志強',
            'description' => '調研訪談',
            'date' => Carbon::parse('2025-07-26'),
            'location' => '南投縣',
            'amount' => 880,
        ]);

        Trip::create([
            'person' => '楊雅筑',
            'description' => '參與教師培訓',
            'date' => Carbon::parse('2025-07-27'),
            'location' => '宜蘭縣',
            'amount' => 1340,
        ]);

        Trip::create([
            'person' => '廖俊傑',
            'description' => '參加AI教育研討會',
            'date' => Carbon::parse('2025-07-28'),
            'location' => '新北市',
            'amount' => 2100,
        ]);
    }
}
