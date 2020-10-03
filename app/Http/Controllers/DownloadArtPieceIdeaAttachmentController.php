<?php

namespace App\Http\Controllers;

use App\Models\ArtPieceIdea;
use Illuminate\Support\Facades\Storage;

class DownloadArtPieceIdeaAttachmentController extends Controller
{
    public function __invoke(ArtPieceIdea $idea)
    {
        abort_unless(Storage::exists($idea->attachment), 404);

        return Storage::download($idea->attachment);
    }
}
