<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Index
        $user           = Auth::user();
        $projects       = Project::all();
        $count          = $projects->count();

        return view('admin.projects', compact(['user', 'projects', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        $user           = Auth::user();

        return view('admin.project_form', ['user' => $user, 'project' => new Project()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store
        $validated = $request->validate([
            'p_name'            => 'required|string|min:3|max:50|not_in:admin,password',
            'land_area'         => 'nullable|string|max:255',
            'project_face'      => 'nullable|string|max:255',
            'b_height'          => 'nullable|string|max:255',
            'num_flat'          => 'nullable|integer',
            'flat_size'         => 'nullable|string|max:255',
            'each_floor'        => 'nullable|integer',
            'address'           => 'nullable|string|max:255',
            'photo'             => 'required||image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $file               = $request->file('photo');
            $path               = $file->store('uploads', 'public');
            $validated['photo'] = $path;
        }

        Project::create($validated);

        return redirect()->route('project.index')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //Show
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        // Edit
        $user           = Auth::user();
        return view('admin.project_form', compact(['user', 'project']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        // Update
        $validated = $request->validate([
            'p_name'            => 'required|string|min:3|max:50|not_in:admin,password',
            'land_area'         => 'nullable|string|max:255',
            'project_face'      => 'nullable|string|max:255',
            'b_height'          => 'nullable|string|max:255',
            'num_flat'          => 'nullable|integer',
            'flat_size'         => 'nullable|string|max:255',
            'each_floor'        => 'nullable|integer',
            'address'           => 'nullable|string|max:255',
            'photo'             => 'required||image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($project->photo && Storage::disk('public')->exists($project->photo)) {
                Storage::disk('public')->delete($project->photo);
            }

            $file               = $request->file('photo');
            $path               = $file->store('uploads', 'public');
            $validated['photo'] = $path;
        }

        $project->update($validated);

        return redirect()->route('project.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete
        if ($project->photo && Storage::disk('public')->exists($project->photo)) {
            Storage::disk('public')->delete($project->photo);
        }

        $project->delete();

        return redirect()->route('project.index')->with('success', 'Deleted Successfully');
    }
}
