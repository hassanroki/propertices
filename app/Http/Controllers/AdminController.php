<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Admin Dashboard
    public function adminDashboard()
    {
        $user = Auth::user(); // Get the currently authenticated user
        return view('admin.admin_dashboard', compact('user'));
    }
}
