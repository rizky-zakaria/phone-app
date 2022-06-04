<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        if(Gate::allows('isAdmin')){
            return redirect('/home');
        }

        if(Gate::allows('isUser')){
            return "user ini sup";
        }

    }
}
