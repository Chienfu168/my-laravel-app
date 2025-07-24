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
                'date' => Carbon::now()->subDays(3)->toDateString(),
                'amount' => 1500,
                'description' => '辦公室租金'
            ],
            [
                'date' => Carbon::now()->subDays(2)->toDateString(),
                'amount' => 580,
                'description' => '文具用品'
            ],
            [
                'date' => Carbon::now()->subDay()->toDateString(),
                'amount' => 2400,
                'description' => '網路費用'
            ],
            [
                'date' => Carbon::now()->toDateString(),
                'amount' => 950,
                'description' => '午餐會議餐費'
            ],
        ];

        foreach ($data as $item) {
            Transaction::create($item);
        }
    }
}
