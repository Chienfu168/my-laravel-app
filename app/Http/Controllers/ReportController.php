<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\PettyCash;
use App\Models\Transaction;
use App\Models\Trip;

class ReportController extends Controller
{
    /**
     * 產出本月收支 PDF 報表
     */
    public function monthlyReport()
    {
        $now = now();
        $start = $now->copy()->startOfMonth();
        $end = $now->copy()->endOfMonth();

        // 範例資料來源（您可依實際資料表調整）
        $pettyCash = PettyCash::whereBetween('date', [$start, $end])->get();
        $transactions = Transaction::whereBetween('date', [$start, $end])->get();
        $trips = Trip::whereBetween('date', [$start, $end])->get();

        // 整理所有項目
        $items = [];

        foreach ($pettyCash as $item) {
            $items[] = [
                '來源' => '零用金',
                '項目' => $item->description,
                '金額' => $item->amount,
                '日期' => $item->date->format('Y-m-d')
            ];
        }

        foreach ($transactions as $item) {
            $items[] = [
                '來源' => '帳務交易',
                '項目' => $item->description ?? '無描述',
                '金額' => $item->amount ?? 0,
                '日期' => $item->date->format('Y-m-d')
            ];
        }

        foreach ($trips as $item) {
            $items[] = [
                '來源' => '出差',
                '項目' => $item->description ?? '無描述',
                '金額' => $item->amount ?? 0,
                '日期' => $item->date->format('Y-m-d')
            ];
        }

        // 排序：依日期排序
        usort($items, fn($a, $b) => strcmp($a['日期'], $b['日期']));

        $total = array_sum(array_column($items, '金額'));

        $pdf = Pdf::loadView('pdf.monthly-report', [
            'title' => $now->format('Y 年 m 月收支報表'),
            'date' => now()->format('Y-m-d'),
            'items' => $items,
            'total' => $total,
        ]);

        return $pdf->download('monthly_report.pdf');
    }
}
