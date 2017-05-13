<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exam = Exam::all();
        return view('user.home.home', ['exam' => $exam, 'serialNo' => 1]);
    }
}
