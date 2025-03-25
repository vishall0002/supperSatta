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

        $query->orderBy('id', 'desc');

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
    // Validate input
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:contacts,email',
                'mobile' => 'required|digits:10|unique:contacts,mobile',
                'landmark' => 'nullable|string|max:255',
                'city' => 'nullable|string|max:255',
                'state' => 'nullable|string|max:255',
                'country' => 'nullable|string|max:255',
                'description' => 'nullable|string',
            ]);

            try {
                    // Create a new contact
                    Contact::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'landmark' => $request->landmark,
                    'city' => $request->city,
                    'state' => $request->state,
                    'country' => $request->country,
                    'description' => $request->description,
                    ]);

            return response()->json([
                        'success' => true,
                        'message' => 'Contact added successfully!'
                        ], 200);
            } catch (\Exception $e) {
            return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong!',
                    'error' => $e->getMessage()
                    ], 500);
            }
    }

   

}
