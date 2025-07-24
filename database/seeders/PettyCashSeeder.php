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
        PettyCash::create([
            'date' => now(),
            'amount' => 500,
            'description' => '文具用品',
            'project_id' => null, // 或指定專案 ID
        ]);

        PettyCash::create([
            'date' => now(),
            'amount' => 800,
            'description' => '茶水費',
            'project_id' => null,
        ]);
    }
}
