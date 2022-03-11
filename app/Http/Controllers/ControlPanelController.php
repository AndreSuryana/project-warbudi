<?php

namespace App\Http\Controllers;

use App\Models\Dance;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ControlPanelController extends Controller
{
    public function index()
    {
        $data = [
            'types' => Type::all(),
        ];

        return view('control-panel', $data);
    }

    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'name'          => 'required|min:5',
            'history'       => 'required|min:10',
            'description'   => 'required|min:10',
            'type_id'       => 'required|numeric',
            'video_link'    => 'required|min:5',
            'images'        => 'file|image|max:2048'
        ]);

        // Store imges file
        $imagePath = $request->file('images')->store('dance-images');

        // Store validated data in array
        $danceData = [
            'name'          => $validated['name'],
            'slug'          => Str::slug($request['name'], '-'),
            'history'       => $validated['history'],
            'description'   => $validated['description'],
            'type_id'       => $validated['type_id'],
            'video_link'    => $validated['video_link'],
            'image_path'    => $imagePath,
        ];

        // dd($danceData);

        $storeStatus = Dance::insert($danceData);

        if (!$storeStatus) {
            return redirect('/control-panel')
                ->with(['error' => 'Maaf gagal menginput data! Mohon coba lagi!']);
        }

        return redirect('/control-panel')
            ->with(['success' => 'Data berhasil di input!']);
    }

    public function danceList()
    {
        // 
    }
}
