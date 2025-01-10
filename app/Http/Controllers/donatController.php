<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing');
    }
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function feedback()
    {
        return view('feedback');
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function submitFeedback(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'feedback' => 'required|string',
        ]);

        // Simpan data feedback ke database (opsional)
        // Feedback::create($request->all());

        // Redirect kembali ke halaman feedback dengan pesan sukses
        return redirect()->route('feedback')->with('success', 'Feedback berhasil dikirim!');
    }
}
