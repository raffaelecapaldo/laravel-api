<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Category;
use App\Models\Language;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->orderBy('featured', 'desc')->paginate(6);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $languages = Language::all();
        return view('admin.projects.create', compact('categories', 'languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $newProject = new Project();
        $newProject->fill($data);
        $newProject->slug = Str::slug($newProject->name, '-');
        $newProject->save();
        $newProject->languages()->attach($request->languages);

        return redirect()->route('admin.projects.index')->with('message', "Il progetto $newProject->name è stato aggiunto correttamente");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        $languages = Language::all();
        return view('admin.projects.edit', compact('project', 'categories', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $project->update($data);
        $project->languages()->sync($request->languages);
        return redirect()->route('admin.projects.index')->with('message', "Il progetto $project->name è stato modificato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('message', "Il progetto $project->name è stato cancellato correttamente");

    }

    public function setfeatured($slug) {
        $project = Project::where('slug', $slug)->first();
        $project->featured = !$project->featured;
        $project->save();
        if ($project->featured) {
        return redirect()->route('admin.projects.index')->with('message', "Il progetto $project->name è stato messo in vetrina");
        }
        else {
        return redirect()->route('admin.projects.index')->with('message', "Il progetto $project->name è stato rimosso dalla vetrina");
        }
    }
}

