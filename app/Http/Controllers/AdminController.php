<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gebruiker;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Gebruiker::all();
        return view('admin.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8',
        ]);

        $admin = Gebruiker::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin created successfully.');
    }

    public function show($id)
    {
        $admin = Gebruiker::findOrFail($id);
        return view('admin.show', compact('admin'));
    }

    public function edit($id)
    {
        $admin = Gebruiker::findOrFail($id);
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Gebruiker::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|min:8',
        ]);

        $admin->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'] ? bcrypt($validatedData['password']) : $admin->password,
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy($id)
    {
        $admin = Gebruiker::findOrFail($id);
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully.');
    }
}