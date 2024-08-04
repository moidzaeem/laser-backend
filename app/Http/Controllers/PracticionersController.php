<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Practicioners;
use App\Models\PractictionerCenter;
use App\Models\User;
use Illuminate\Http\Request;

class PracticionersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $practictioners = Practicioners::all();
        $centers = Center::all();
        return view('admin.practictioner.index', compact('practictioners', 'centers'));
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
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'string|max:255',
            'phone_no' => 'string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as needed
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => \Hash::make('12345678'),
        ]);



        $practictioner = new Practicioners();
        $practictioner->name = $request->input('name');
        $practictioner->email = $request->input('email');
        $practictioner->phone_no = $request->input('phone_no');
        $practictioner->user_id = $user->id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension(); // Generate a unique name
            $image->move(public_path('uploads'), $imageName); // Move the file to the public/images directory
            $practictioner->image = 'uploads/' . $imageName; // Save the relative path
        }

        $practictioner->save();



        $isCenterExists = PractictionerCenter::where('center_id',$request->center_id)->first();
        if ($isCenterExists) {
            $existingPractitioners = explode(',', $isCenterExists->practicioners_ids);

            // Add the new practitioner ID if it's not already present
            if (!in_array($practictioner->id, $existingPractitioners)) {
                $existingPractitioners[] = $practictioner->id;
                $isCenterExists->practicioners_ids = implode(',', $existingPractitioners);
                $isCenterExists->save();
            }
        } else {
            PractictionerCenter::create([
                'center_id' => $request->center_id,
                'practicioners_ids' => $practictioner->id
            ]);
        }

        return back()->with('success', 'Practictioner is created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Practicioners $practicioners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Practicioners $practicioners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_no' => 'required|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $practitioner = Practicioners::findOrFail($id);
        $practitioner->name = $request->input('name');
        $practitioner->email = $request->input('email');
        $practitioner->phone_no = $request->input('phone_no');

        // if ($request->hasFile('image')) {
        //     // Handle file upload
        //     $imagePath = $request->file('image')->store('public/practitioners');
        //     $practitioner->image = basename($imagePath);
        // }

        $practitioner->save();

        return back()->with('success', 'Profile updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Practicioners $practicioners)
    {
        //
    }
}
