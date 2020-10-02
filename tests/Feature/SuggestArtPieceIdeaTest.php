<?php

use App\Http\Livewire\ArtPieceIdeaForm;
use App\Models\ArtPieceIdea;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use function Pest\Livewire\livewire;

it('can create a suggestion', function () {
    livewire(ArtPieceIdeaForm::class)
        ->set('name', 'Henk')
        ->set('email', 'henk@h-mail.com')
        ->set('description', 'This is an idea for a cool art piece')
        ->call('submit');

    $artPieceIdea = ArtPieceIdea::firstOrFail();
    expect($artPieceIdea->name)->toBe('Henk');
    expect($artPieceIdea->email)->toBe('henk@h-mail.com');
    expect($artPieceIdea->description)->toBe('This is an idea for a cool art piece');
    expect($artPieceIdea->attachment)->toBeNull();
});

it('can attach an image file to a suggestion', function ($extension) {
    Storage::fake();

    $file = UploadedFile::fake()->image('sketch.' . $extension);

    livewire(ArtPieceIdeaForm::class)
        ->set('name', 'Henk')
        ->set('email', 'henk@h-mail.com')
        ->set('description', 'This is an idea for a cool art piece')
        ->set('attachmentFile', $file)
        ->call('submit');

    $artPieceIdea = ArtPieceIdea::firstOrFail();
    Storage::disk('tmp-for-tests')->assertExists($artPieceIdea->attachment);
})->with(['jpg', 'png']);

it('can attach a file to a suggestion', function ($extension) {
    Storage::fake();

    $file = UploadedFile::fake()->create('sketch.' . $extension);

    livewire(ArtPieceIdeaForm::class)
        ->set('name', 'Henk')
        ->set('email', 'henk@h-mail.com')
        ->set('description', 'This is an idea for a cool art piece')
        ->set('attachmentFile', $file)
        ->call('submit');

    $artPieceIdea = ArtPieceIdea::firstOrFail();
    Storage::disk('tmp-for-tests')->assertExists($artPieceIdea->attachment);
})->with(['pdf', 'docx']);

it('cannot create a suggestion without a name')
    ->livewire(ArtPieceIdeaForm::class)
    ->set('email', 'henk@h-mail.com')
    ->set('description', 'This is an idea for a cool art piece')
    ->call('submit')
    ->assertHasErrors('name');

it('cannot create a suggestion without an email address')
    ->livewire(ArtPieceIdeaForm::class)
    ->set('name', 'Henk')
    ->set('description', 'This is an idea for a cool art piece')
    ->call('submit')
    ->assertHasErrors('email');

it('cannot create a suggestion with an invalid email')
    ->livewire(ArtPieceIdeaForm::class)
    ->set('name', 'Henk')
    ->set('description', 'This is an idea for a cool art piece')
    ->set('email', 'henk-mail')
    ->call('submit')
    ->assertHasErrors('email');

it('cannot create a suggestion without a description')
    ->livewire(ArtPieceIdeaForm::class)
    ->set('name', 'Henk')
    ->set('email', 'henk@h-mail.com')
    ->call('submit')
    ->assertHasErrors('description');

it('cannot attach a file of an unspported type to a suggestion', function ($extension) {
    Storage::fake();

    $file = UploadedFile::fake()->create('sketch.' . $extension);

    $component = livewire(ArtPieceIdeaForm::class)
        ->set('name', 'Henk')
        ->set('email', 'henk@h-mail.com')
        ->set('description', 'This is an idea for a cool art piece')
        ->set('attachmentFile', $file)
        ->call('submit');

    $component->assertHasErrors('attachmentFile');
})->with(['svg', 'psd', 'exe']);
