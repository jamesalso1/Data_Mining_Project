<?php

namespace App\Http\Controllers;

use Log;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $script_python_path = public_path('storage/script/script.py');
        $run_python = shell_exec('python3 ' . $script_python_path);
        Log::info('Python script executed: ' . $run_python);
        return view('home');
    }
}
