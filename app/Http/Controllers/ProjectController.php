<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * 顯示所有專案列表
     */
    public function index()
    {
        $projects = Project::all(); // 可改成 paginate(10)
        return view('projects.index', compact('projects'));
    }

    /**
     * 顯示建立新專案的表單
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * 儲存新建立的專案資料
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        Project::create($validated);

        return redirect()->route('projects.index')->with('success', '專案新增成功');
    }

    /**
     * 顯示單一專案詳細內容
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * 顯示編輯專案的表單
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * 更新專案資料
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', '專案更新成功');
    }

    /**
     * 刪除專案
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', '專案已刪除');
    }
}
