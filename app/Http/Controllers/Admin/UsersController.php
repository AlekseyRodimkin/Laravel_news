<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy("created_at", "DESC")->paginate(30);

        return view("admin.adminUsers", [
            "users" => $users,
        ]);
    }
}
