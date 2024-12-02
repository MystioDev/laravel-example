<?php

namespace App\Http\Controllers;

use App\Models\team_models;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = team_models::all();

        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required'
        ], [
            'name.required' => 'Name is required.',
            'contact.required' => 'Name is required.',
        ]);

        $model = new team_models();
        $model->name = $request->name;
        $model->contact = $request->contact;
        $model->save();

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = team_models::find($id);

        return view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = team_models::find($id);

        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required'
        ], [
            'name.required' => 'Name is required.',
            'contact.required' => 'Name is required.',
        ]);

        $model = team_models::find($id);
        $model->name = $request->name;
        $model->contact = $request->contact;
        $model->save();

        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = team_models::find($id);
        $team->delete();

        return redirect()->route('teams.index');
    }
}
