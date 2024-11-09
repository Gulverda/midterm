<?php

// app/Http/Controllers/StudyGroupController.php
namespace App\Http\Controllers;

use App\Models\StudyGroup;
use Illuminate\Http\Request;

class StudyGroupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'subject' => 'required|string',
            'schedule' => 'required|string',
        ]);

        $group = StudyGroup::create($request->all());

        return response()->json($group, 201);
    }

    public function index()
    {
        return StudyGroup::all();
    }

    public function show($id)
    {
        return StudyGroup::findOrFail($id);
    }

    public function join($id)
    {
        // Logic for joining group
    }

    public function leave($id)
    {
        // Logic for leaving group
    }
}
