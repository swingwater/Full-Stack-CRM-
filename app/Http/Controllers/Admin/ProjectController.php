<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Projects::all();
        return view('admin.projects')->with('projects', $projects);
    }

    public function store(Request $request){
        $projects = new Projects;

        $projects->title = $request->input('title');
        $projects->description = $request->input('description');
        $projects->deadline = $request->input('deadline');
        $projects->status = $request->input('status');

        $projects->save();
        return redirect('/projects')->with('success','Added');
    }

    public function edit($id)
    {
       $projects = Projects::findOrFail($id);
        return view('admin.projects.edit')->with('projects', $projects);
    }

    public  function update(Request $request, $id)
    {
        $projects = Projects::findOrFail($id);

        $projects->title = $request->input('title');
        $projects->description = $request->input('description');
        $projects->deadline = $request->input('deadline');
        $projects->status = $request->input('status');
        $projects->update();
        return redirect('projects')->with('status', 'Updated');
    }

    public function delete($id)
    {
        $projects = Projects::findOrFail($id);
        $projects->delete();

        return redirect('projects')->with('status', 'Updated');
    }
}
