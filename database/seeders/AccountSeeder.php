<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        Account::create([
            'name' => '主戶頭',
            'account_number' => '123-456-7890',
            'bank' => '第一銀行',
            'balance' => 100000,
            'note' => '主要營運資金帳戶',
        ]);

        Account::create([
            'name' => '專案專戶',
            'account_number' => '987-654-3210',
            'bank' => '台灣銀行',
            'balance' => 50000,
            'note' => '政府專案資金管理使用',
        ]);

        Account::create([
            'name' => '零用金戶',
            'account_number' => '111-222-3333',
            'bank' => '合作金庫',
            'balance' => 3000,
            'note' => '日常零用金用途',
        ]);
    }
}
