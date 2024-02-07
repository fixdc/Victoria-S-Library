<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $book)
    {
        $users = User::with('role')->get();
        return view ('dashboard/admin/datauser', [
            'user' => $users
        ]);
    }
}
