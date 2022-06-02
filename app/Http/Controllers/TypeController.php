<?php

namespace App\Http\Controllers;

use App\Models\Dance;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(Type $type, Request $request)
    {
        $dances = $type->dance;

        if ($request->search) {
            $dances = Dance::where('name', 'like', '%' . $request->search . '%')
                ->where('type_id', '=', $type->id)
                ->get();
        }

        $data = [
            'title'      => $type->name,
            'subtitle'   => $type->subtitle,
            'cover_path' => $type->cover_path,
            'dances'     => $dances,
            'type_slug'  => $type->slug,
            'search'     => $request->search,
        ];

        return view('detail-type', $data);
    }
}
