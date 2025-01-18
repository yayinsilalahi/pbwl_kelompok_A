<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
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
    public function create()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'feedback' => 'required|string|max:1000'
        ]);
        Feedback::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'feedback' => $request->feedback,
        ]);

        return redirect('/feedback')->with('success', 'Feedback berhasil dikirim!');
    }

    public function admin()
    {
        $feedback = Feedback::all();
        return view('admin', compact('feedback'));
    }

}
