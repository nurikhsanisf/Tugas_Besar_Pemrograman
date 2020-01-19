<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    Public  function admin()
    {
        $kamar =\App\Kamar::all();
        return view('admin.admin', ['kamar' => $kamar]);
    }
}
