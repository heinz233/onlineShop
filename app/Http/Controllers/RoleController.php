<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $role = Role::all();
       return response()->json($role);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name'=>'required|string',
            'price'=>'required|string',
            'description'=>'required|string',
            'category'=>'required|string',
            'image'=>'required|string',
        ]);

        $role = new Role();
        $role->name = $validated['name'];


        $role->save();

        return response()->json(['message'=>'Role created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
         $validated = $request->validate([
            'name'=>'required|string',
            'price'=>'required|string',
            'description'=>'required|string',
            'category'=>'required|string',
            'image'=>'required|string',
        ]);

        $role = Role::find($role);
        $role->name = $validated['name'];


        $role->save();

        return response()->json(['message'=>'Role updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
