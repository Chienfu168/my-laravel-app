<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => '校舍整建計畫',
            'start_date' => '2025-08-01',
            'end_date' => '2026-02-28',
        ]);

        Project::create([
            'name' => '遊樂場翻新工程',
            'start_date' => '2025-09-15',
            'end_date' => '2026-01-31',
        ]);

        Project::create([
            'name' => '智慧校園推動計畫',
            'start_date' => '2025-07-01',
            'end_date' => '2026-06-30',
        ]);
    }
}
