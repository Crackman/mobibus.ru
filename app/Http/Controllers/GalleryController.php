<?php

namespace App\Http\Controllers;

use App\Models\Img;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Img::all();

        return view('gallery.index', compact('images'));
    }
}
