<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPerizinanController extends Controller
{
    public function index()
    {
        return view('dashboard.perizinan.index', [
            'title' => 'Perizinan Tamu'
        ]);
    }

    public function store()
    {
        //
    }
}
