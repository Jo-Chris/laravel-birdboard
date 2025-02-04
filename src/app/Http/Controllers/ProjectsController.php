<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index() {

        $projects = auth()->user()->projects;

        return view('projects.index', compact('projects'));
    }


    public function show(Project $project) {
        if (auth()->user()->isNot($project->owner)){
             abort(403);
         }

        return view('projects.show', compact('project'));
    }


    public function store() {

        $attributes = request()->validate([
            'title' => 'max:255',
            'description' => 'max:255',
        ]);


        auth()->user()->projects()->create($attributes);

        return redirect('/projects');
    }

    public function create() {
        return view('projects.create');
    }

}
