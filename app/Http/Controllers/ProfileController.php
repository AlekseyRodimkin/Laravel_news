<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show() {
        // Получаем текущего пользователя
        $user = Auth::user();

        // Передаем данные во view
        return view('profile.index', compact('user'));
    }
}
