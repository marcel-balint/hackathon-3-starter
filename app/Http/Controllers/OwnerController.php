<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $owner = new Owner();

        return view('owner.form', compact(
            'owner'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateOwner($request);

        $owner = new Owner();
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');
        $owner->save();

        session()->flash('success_message', 'The owner was successfully saved!');

        return redirect()->route('owner.edit', $owner->id);
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
        $owner = Owner::findOrFail($id);

        return view('owner.form', compact(
            'owner'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateOwner($request);

        $owner = Owner::findOrFail($id);

        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');
        $owner->update();

        session()->flash('success_message', 'The owner was successfully updated!');

        return redirect()->route('owner.edit', $owner->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function validateOwner($request)
    {
        $this->validate($request, [
            'first_name' => 'required|min:3',
            'surname' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required'
        ], [
            'first_name.required' => 'Write down your first name',
            'surname.required' => 'Write down your surname',
            'email.required' => 'Write down your email',
            'phone.required' => 'Write down your phone number',
            'address.required' => 'Write down your address',
        ]);
    }
}
