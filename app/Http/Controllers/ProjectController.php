<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;


class ProjectController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $projects = Project::latest('updated_at')->get(); // latest-> ordena según la columna updated_at
        $projects = Project::latest()->paginate(5);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project;
        return view('projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        Project::create($request->validated());
        return redirect()->route('projects.index')->with('status', 'El proyecto ha sido creado con éxito.');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $project = Project::findOrFail($id);
    //     return view('projects.show', compact('project'));
    // }

    /**
     * Display the specified resource.
     
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    // * ROUTE MODEL BINDING
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, ProjectRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', $project)->with('status', 'El proyecto ha sido modificado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto ha sido eliminado con éxito.');
    }
}
