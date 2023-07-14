<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard'
        ]);
    }
    public function about()
    {
        return view('admin.admin.about', [
            'title' => 'User'
        ]);
    }
}
