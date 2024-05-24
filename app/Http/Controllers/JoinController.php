<?php

namespace App\Http\Controllers;

use App\Models\join;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function dashboard()
    {
        $membership = join::all();
        return view('dashboard', compact('membership'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('joinNow');
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
        join::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(join $join)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(join $join)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, join $join)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(join $join)
    {
        //
    }
}
