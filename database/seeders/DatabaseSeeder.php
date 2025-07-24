<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 建立測試用戶
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // 執行帳戶資料 Seeder
        $this->call([
            AccountSeeder::class,
            ProjectSeeder::class, // ⬅️ 加上這行
            PettyCashSeeder::class,
            TransactionSeeder::class,
            TripSeeder::class,

        ]);
    }
}
