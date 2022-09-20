<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //

    public function store(Request $request)
    {
      Email::create([
         'email'=>$request->email
        ]);

        return redirect()->route('home');
    }
}
