<?php

namespace App\Http\Livewire;

use App\Models\ArtPieceIdea;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArtPieceIdeaForm extends Component
{
    use WithFileUploads;

    public $completed = false;

    public $name;
    public $email;
    public $description;
    public $attachmentFile;

    public $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'description' => ['required', 'string'],
        'attachmentFile' => ['nullable', 'file', 'max:25000', 'mimes:pdf,docx,jpeg,png'],
    ];

    public function submit()
    {
        $this->validate();

        ArtPieceIdea::create([
            'name' => $this->name,
            'email' => $this->email,
            'description' => $this->description,
            'attachment' => $this->attachmentFile ? $this->attachmentFile->store('art_piece_ideas') : null
        ]);

        $this->completed = true;
    }

    public function render()
    {
        return view('livewire.art-piece-idea-form');
    }
}
