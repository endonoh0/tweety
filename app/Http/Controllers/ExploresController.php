<?php

namespace App\Http\Controllers;

use App\User;

class ExploresController extends Controller
{
    public function __invoke()
    {
        return view('explore', [
            'users' => User::paginate(50)
        ]);
    }
}
