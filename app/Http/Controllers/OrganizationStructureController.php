<?php

// app/Http/Controllers/OrganizationStructureController.php
namespace App\Http\Controllers;

use App\Models\OrganizationStructure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganizationStructureController extends Controller
{
    public function index()
    {
        return view('dashboard.organization.index', [
            'members' => OrganizationStructure::orderBy('order')->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.organization.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'photo' => 'image|file|max:2048',
            'order' => 'required|integer'
        ]);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('org-photos', 'public');
        }

        OrganizationStructure::create($validatedData);

        return redirect('/dashboard/organization')->with('success', 'Anggota baru berhasil ditambahkan!');
    }


    public function edit(OrganizationStructure $organization)
    {
        return view('dashboard.organization.edit', [
            'member' => $organization
        ]);
    }

    public function update(Request $request, OrganizationStructure $organization)
    {
        $rules = [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'photo' => 'image|file|max:2048',
            'order' => 'required|integer'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('photo')) {
            if ($request->oldPhoto) {
                Storage::disk('public')->delete($request->oldPhoto);
            }
            $validatedData['photo'] = $request->file('photo')->store('org-photos', 'public');
        }

        OrganizationStructure::where('id', $organization->id)->update($validatedData);

        return redirect('/dashboard/organization')->with('success', 'Data anggota berhasil diperbarui!');
    }

    public function destroy(OrganizationStructure $organization)
    {
        if ($organization->photo) {
            Storage::disk('public')->delete($organization->photo);
        }

        OrganizationStructure::destroy($organization->id);

        return redirect('/dashboard/organization')->with('success', 'Data anggota telah dihapus!');
    }
}