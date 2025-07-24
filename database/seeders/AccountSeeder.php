<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'name' => '主戶頭',
            'number' => '123-456-7890',
            'bank_name' => '第一銀行',
        ]);

        Account::create([
            'name' => '專案專戶',
            'number' => '987-654-3210',
            'bank_name' => '台灣銀行',
        ]);

        Account::create([
            'name' => '零用金戶',
            'number' => '111-222-3333',
            'bank_name' => '合作金庫',
        ]);
    }
}
