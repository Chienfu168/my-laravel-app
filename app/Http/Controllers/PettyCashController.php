<?php

namespace App\Http\Controllers;

use App\Models\PettyCash;
use Illuminate\Http\Request;

class PettyCashController extends Controller
{
    /**
     * 顯示所有零用金紀錄
     */
    public function index()
    {
        $pettyCashList = PettyCash::all();
        return view('petty-cash.index', compact('pettyCashList'));
    }

    /**
     * 顯示新增零用金表單
     */
    public function create()
    {
        return view('petty-cash.create');
    }

    /**
     * 儲存新建的零用金紀錄
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'description' => 'nullable|string|max:255',
            'project_id' => 'nullable|integer|exists:projects,id',
        ]);

        PettyCash::create($validated);

        return redirect()->route('petty-cash.index')->with('success', '零用金紀錄新增成功');
    }

    /**
     * 顯示特定零用金紀錄
     */
    public function show(PettyCash $pettyCash)
    {
        return view('petty-cash.show', compact('pettyCash'));
    }

    /**
     * 顯示編輯零用金表單
     */
    public function edit(PettyCash $pettyCash)
    {
        return view('petty-cash.edit', compact('pettyCash'));
    }

    /**
     * 更新指定的零用金紀錄
     */
    public function update(Request $request, PettyCash $pettyCash)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'description' => 'nullable|string|max:255',
            'project_id' => 'nullable|integer|exists:projects,id',
        ]);

        $pettyCash->update($validated);

        return redirect()->route('petty-cash.index')->with('success', '零用金紀錄更新成功');
    }

    /**
     * 刪除指定的零用金紀錄
     */
    public function destroy(PettyCash $pettyCash)
    {
        $pettyCash->delete();

        return redirect()->route('petty-cash.index')->with('success', '零用金紀錄已刪除');
    }
}
