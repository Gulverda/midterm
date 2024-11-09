<?php

// app/Http/Controllers/SessionController.php
namespace App\Http\Controllers;

use App\Models\StudyGroup;
use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(Request $request, $groupId)
    {
        $request->validate([
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        $group = StudyGroup::findOrFail($groupId);
        $session = $group->sessions()->create($request->all());

        return response()->json($session, 201);
    }
}

