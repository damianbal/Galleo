<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {   
        $userGalleries = Auth::user()->galleries;

        return view('dashboard.index', [
            'galleries' => $userGalleries
        ]);
    }
}
