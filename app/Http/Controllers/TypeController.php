<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(Type $type)
    {
        $data = [
            'title'     => $type->name,
            'subtitle'  => $type->subtitle,
            'cover_path'     => $type->cover_path,
            'dances'    => $type->dance
        ];

        return view('detail-type', $data);
    }
}
