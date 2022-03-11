<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function type()
    {
        $types = [
            'types' => Type::all()
        ];

        return view('type', $types);
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }
}
