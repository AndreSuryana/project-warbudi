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
            'image_link'    => 'required|min:5'
        ]);

        // Store imges file
        // $imagePath = $request->file('images')->store('dance-images');

        // Store validated data in array
        $danceData = [
            'name'          => $validated['name'],
            'slug'          => Str::slug($request['name'], '-'),
            'history'       => $validated['history'],
            'description'   => $validated['description'],
            'type_id'       => $validated['type_id'],
            'video_link'    => $validated['video_link'],
            'image_path'    => $validated['image_link']
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
        $data = [
            'dances' => Dance::all()
        ];

        return view('dance-list', $data);
    }

    public function viewDanceEdit(Dance $dance)
    {
        $data = [
            'dance' => $dance,
            'types' => Type::all()
        ];

        return view('dance-edit', $data);
    }

    public function danceEdit(Request $request, Dance $dance)
    {
        // Validate request data
        $validated = $request->validate([
            'name'          => 'required|min:5',
            'history'       => 'required|min:10',
            'description'   => 'required|min:10',
            'type_id'       => 'required|numeric',
            'video_link'    => 'required|min:5',
            'image_link'    => 'required|min:5'
        ]);

        // Store validated data in array
        $danceData = [
            'name'          => $validated['name'],
            'slug'          => Str::slug($request['name'], '-'),
            'history'       => $validated['history'],
            'description'   => $validated['description'],
            'type_id'       => $validated['type_id'],
            'video_link'    => $validated['video_link'],
            'image_path'    => $validated['image_link']
        ];
        
        $currDance = Dance::find($dance->id);

        $currDance->name = $danceData['name'];
        $currDance->slug = $danceData['slug'];
        $currDance->history = $danceData['history'];
        $currDance->description = $danceData['description'];
        $currDance->type_id = $danceData['type_id'];
        $currDance->video_link = $danceData['video_link'];
        $currDance->image_path = $danceData['image_path'];

        $updateStatus = $currDance->save();

        if (!$updateStatus) {
            return redirect('/control-panel/dance-edit/'.$dance->slug)
                ->with(['error' => 'Maaf gagal menginput data! Mohon coba lagi!']);
        }

        return redirect('/control-panel/dance-edit/'.$dance->slug)
            ->with(['success' => 'Data berhasil di input!']);
    }

    public function delete(Request $request)
    {
        $danceId = $request->get('dance_id');
        $danceName = "";

        if ($danceId != null) {
            $dance = Dance::find($danceId);
            $danceName = $dance->name;
            $dance->delete();
        } else {
            return redirect('/control-panel/dance-list/')
                ->with(['eror' => 'Tari' . $danceName . 'gagal dihapus!']);
        }

        return redirect('/control-panel/dance-list/')
            ->with(['success' => 'Tari' . $danceName . 'berhasil dihapus!']);
    }
}
