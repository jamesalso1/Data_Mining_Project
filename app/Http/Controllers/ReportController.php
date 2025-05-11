<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('admin.report.index');
    }
}
