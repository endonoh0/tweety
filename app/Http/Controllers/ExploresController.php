<?php

namespace App\Http\Controllers;

use App\User;

class ExploresController extends Controller
{
    public function index()
    {
        return view('explore', [
            'users' => User::paginate(50)
        ]);
    }
}
