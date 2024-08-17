<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    public function index()
    {
        $admins = User::all(); 
        return view('resources.admin-management.index', compact('admins'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('resources.admin-management.index')->with('success', 'Post Succesfully Deleted!');   
    }
}

