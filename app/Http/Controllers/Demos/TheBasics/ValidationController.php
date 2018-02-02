<?php

namespace App\Http\Controllers\Demos\TheBasics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValidationController extends Controller
{
    public function rule(Request $request)
    {
        $data = [];
        $data['title'] = '验证规则';

        if ($request->method()=='POST'){
            $request->validate([
                'email' => 'required|unique:posts',
                'password' => 'required',
                'date' => 'nullable|date'

            ]);
        }

        return view('demos.the-basics.validation.rule', $data);
    }
}
