<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $accounts = \App\Models\Account::all(); // 或使用 paginate()
    return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:50',
            'bank_name' => 'nullable|string|max:255',
        ]);

        Account::create($validated);

        return redirect()->route('accounts.index')->with('success', '帳戶建立成功');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
                return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
                return view('accounts.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:50',
            'bank_name' => 'nullable|string|max:255',
        ]);

        $account->update($validated);

        return redirect()->route('accounts.index')->with('success', '帳戶更新成功');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
     $account->delete();
        return redirect()->route('accounts.index')->with('success', '帳戶已刪除');
    }
}
