<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class AppealController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy("created_at", "DESC")->paginate(30);

        return view("admin.contacts", [
            "contacts" => $contacts,
        ]);
    }
}
