<?php

namespace App\Http\Controllers;

use App\Models\Dance;
use App\Models\Type;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Dance $dance)
    {
        $data = [
            'title'         => $dance->type->name,
            'subtitle'      => $dance->type->subtitle,
            'name'          => $dance->name,
            'images'        => $dance->image,
            'history'       => $dance->history,
            'description'   => $dance->description,
            'video_link'    => $dance->video_link,
            'type'          => $dance->type,
            'image_path'    => $dance->image_path,
        ];

        return view('detail-dance', $data);
    }
}
