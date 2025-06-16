<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
            'short_description' => 'required',
            'long_description' => 'required',
            'price' => 'required|numeric',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($data);

        return redirect()->route('services.index')->with('success', 'Service created.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
            'short_description' => 'nullable',
            'long_description' => 'nullable',
            'price' => 'nullable|numeric',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->route('services.index')->with('success', 'Service updated.');
    }

    public function delete($id)
    {
        Service::findOrFail($id)->delete();
        return back()->with('success', 'Service deleted.');
    }

    public function frontendShow($id)
    {
        $service = Service::findOrFail($id);
        return view('frontend.services.show', compact('service'));
    }
}
