<?php

namespace App\Http\Controllers;
use App\Models\Main;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
         $reports = Main::latest()->paginate();

        return view('report.main', compact('reports'));
    }
}
