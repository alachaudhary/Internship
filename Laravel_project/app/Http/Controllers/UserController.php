<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Render the view for the users page
        return view('user_view');
    }

    public function fetchUsers(Request $request)
    {
      
        $users = User::all(); 
        return response()->json($users); // Return user data as JSON
    }
    

    public function updateRole(Request $request)
{
    $user = User::find($request->id);

    if ($user) {
        $user->type = $request->type; // Update the type (admin/user)
        $user->save();

        return response()->json(['success' => true, 'message' => 'User role updated successfully.']);
    }

    return response()->json(['success' => false, 'message' => 'User not found.']);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
