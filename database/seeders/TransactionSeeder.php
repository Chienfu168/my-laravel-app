<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'date' => Carbon::now()->subDays(10)->toDateString(),
                'amount' => 1500,
                'description' => '辦公室租金',
            ],
            [
                'date' => Carbon::now()->subDays(9)->toDateString(),
                'amount' => 580,
                'description' => '文具用品',
            ],
            [
                'date' => Carbon::now()->subDays(8)->toDateString(),
                'amount' => 2400,
                'description' => '網路費用',
            ],
            [
                'date' => Carbon::now()->subDays(7)->toDateString(),
                'amount' => 950,
                'description' => '午餐會議餐費',
            ],
            [
                'date' => Carbon::now()->subDays(6)->toDateString(),
                'amount' => 3000,
                'description' => '設備維修費用',
            ],
            [
                'date' => Carbon::now()->subDays(5)->toDateString(),
                'amount' => 1200,
                'description' => '交通補助',
            ],
            [
                'date' => Carbon::now()->subDays(4)->toDateString(),
                'amount' => 400,
                'description' => '雜項開支',
            ],
            [
                'date' => Carbon::now()->subDays(3)->toDateString(),
                'amount' => 1850,
                'description' => '影印紙及耗材',
            ],
            [
                'date' => Carbon::now()->subDays(2)->toDateString(),
                'amount' => 600,
                'description' => '清潔服務費',
            ],
            [
                'date' => Carbon::now()->subDay()->toDateString(),
                'amount' => 3200,
                'description' => '資訊設備採購',
            ],
        ];

        foreach ($data as $item) {
            Transaction::create($item);
        }
    }
}
