<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        // Mengambil data pengguna yang sedang login
        $user = Auth::user();

        // Menampilkan view 'profile' dengan data pengguna
        return view('users.profile', ['user' => $user]);
    }
}
