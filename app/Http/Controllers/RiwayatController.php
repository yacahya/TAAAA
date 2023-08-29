<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controller Admin
class RiwayatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items=[
            
        ];
        return view ('riwayat.index', compact('items'));
    }
}