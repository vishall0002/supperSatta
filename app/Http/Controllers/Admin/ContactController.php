<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request; // ✅ Correct namespace for Request
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(Request $request) // ✅ Type-hint Request correctly
    {
        $query = Contact::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }

        $contacts = $query->paginate(5)->appends($request->query()); // ✅ Keeps search parameters in pagination

        return view('admin.contacts.index', compact('contacts'));
    }


    public function create()
    {
        return view('admin.contacts.create');
    }

    // Store the contact in the database
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:contacts,email',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address'     => 'nullable|string|max:255',
            'mobile'      => 'required|string|min:10|max:15',
        ]);

        // Handle image upload if provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('contacts', 'public');
        }

        // Save contact
        Contact::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'description' => $request->description,
            'image'       => $imagePath,
            'address'     => $request->address,
            'mobile'      => $request->mobile,
        ]);

        return redirect()->route('admin.contacts.create')->with('success', 'Contact added successfully!');
    }
}
