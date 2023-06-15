<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->with('languages')->paginate(20);
        if (!$projects) {
            return response()->json([
                'success' => false,
                'results' => 'Projects not founded'
            ]);
        } else {
            return response()->json(
                [
                    'success' => true,
                    'results' => $projects
                ]
            );
        }
    }

    public function show($slug) {
        $project = Project::where('slug', $slug)->with(['languages', 'category'])->first();
        if (!$project) {
            return response()->json([
                'success' => false,
                'results' => 'Project not found'
            ]);
    }
    else {
        return response()->json([
            'success' => 'true',
            'results' => $project
        ]);
    }
}}
