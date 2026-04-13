<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();

        if ($user->role === 'admin') {
            // Admin melihat semua user
            // Email dibiarkan terenkripsi (sesuai request)
            $allUsers = User::where('role', 'user')->get();
            return view('dashboard.admin', compact('user', 'allUsers'));
        } else {
            // User biasa melihat datanya sendiri
            // Email harus DI-DEKRIPSI agar bisa dibaca user
            try {
                $decryptedEmail = Crypt::decryptString($user->email);
            } catch (\Exception $e) {
                $decryptedEmail = "Error Decrypting";
            }

            return view('dashboard.user', compact('user', 'decryptedEmail'));
        }
    }
}