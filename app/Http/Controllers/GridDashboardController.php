<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GridDashboardController extends Controller
{
    public function gridDashboard()
    {
        return view('gridView');
    }
}
