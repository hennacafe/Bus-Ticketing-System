<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        return view('bus.index', compact('buses'));
    }

    public function create()
    {
        return view('bus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'plate_number' => 'required|unique:buses',
            'bus_name' => 'required',
            'capacity' => 'required|integer',
            'type' => 'required',
            'status' => 'required'
        ]);

        Bus::create($validated);

        return redirect()->route('bus.index')->with('success', 'Bus created successfully.');
    }

    public function show(string $id)
    {
        $bus = Bus::findOrFail($id);
        return view('bus.show', compact('bus'));
    }

    public function edit(string $id)
    {
        $bus = Bus::findOrFail($id);
        return view('bus.edit', compact('bus'));
    }

    public function update(Request $request, string $id)
    {
        $bus = Bus::findOrFail($id);

        $validated = $request->validate([
            'plate_number' => 'required|unique:buses,plate_number,' . $bus->id,
            'bus_name' => 'required',
            'capacity' => 'required|integer',
            'type' => 'required',
            'status' => 'required'
        ]);

        $bus->update($validated);

        return redirect()->route('bus.index')->with('success', 'Bus updated successfully.');
    }

    public function destroy(string $id)
    {
        $bus = Bus::findOrFail($id);
        $bus->delete();

        return redirect()->route('bus.index')->with('success', 'Bus deleted successfully.');
    }
}


