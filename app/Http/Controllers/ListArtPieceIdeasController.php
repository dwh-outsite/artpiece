<?php

namespace App\Http\Controllers;

use App\Models\ArtPieceIdea;

class ListArtPieceIdeasController extends Controller
{
    public function __invoke()
    {
        return view('ideas', ['ideas' => ArtPieceIdea::latest()->get()]);
    }
}
