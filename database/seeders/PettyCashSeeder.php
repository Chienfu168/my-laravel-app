<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PettyCash;

class PettyCashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['date' => '2025-07-01', 'amount' => 500, 'description' => '文具用品', 'project_id' => 1],
            ['date' => '2025-07-02', 'amount' => 800, 'description' => '茶水費', 'project_id' => 1],
            ['date' => '2025-07-05', 'amount' => 300, 'description' => '影印紙', 'project_id' => 2],
            ['date' => '2025-07-06', 'amount' => 450, 'description' => '交通費', 'project_id' => 2],
            ['date' => '2025-07-08', 'amount' => 600, 'description' => '小工具', 'project_id' => 3],
            ['date' => '2025-07-09', 'amount' => 700, 'description' => '會議點心', 'project_id' => 3],
            ['date' => '2025-07-10', 'amount' => 200, 'description' => '茶水費', 'project_id' => 4],
            ['date' => '2025-07-11', 'amount' => 900, 'description' => '餐飲費', 'project_id' => 4],
            ['date' => '2025-07-12', 'amount' => 400, 'description' => '郵資', 'project_id' => 5],
            ['date' => '2025-07-13', 'amount' => 550, 'description' => '教育材料', 'project_id' => 5],
        ];

        foreach ($data as $item) {
            PettyCash::create($item);
        }
    }
}
