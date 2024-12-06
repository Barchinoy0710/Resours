<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Admin panelini ko'rsatish
     */
    public function index()
    {
        // Barcha foydalanuvchilarni olish
        $users = User::all();

        // Dashboardga yuborish
        return view('dashboard', compact('users'));  // dashboard.blade.php faylga $users ni yuborish
    }
}
