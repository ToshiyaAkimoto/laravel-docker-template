<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index');//view('todo.index') は resources/views/ に配置されている index.blade.php のことを指している
    }
}
