<?php

use Illuminate\Container\Attributes\DB as AttributesDB;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;

// index
Route::get('/ideas', function () {
    $ideas = Idea::query()
        ->when(request('state'), function ($query, $state) {
            $query->where('state', $state);
        })
        ->get();

    return view('ideas.index', [
        'ideas' => $ideas
    ]);
});

// show
Route::get('/ideas/{idea}', function (Idea $idea) {
    // $idea = Idea::findOrFail($id);

    // findOrFail does this:
    // if (is_null($idea)) {
    //     abort(404);
    // }

    return view('ideas.show', [
        'idea' => $idea
    ]);
});

// edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    // $idea = Idea::findOrFail($id);

    // findOrFail does this:
    // if (is_null($idea)) {
    //     abort(404);
    // }

    return view('ideas.edit', [
        'idea' => $idea
    ]);
});

// update
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description')
    ]);

    return redirect("/ideas/{$idea->id}");
});

// store
Route::post('/ideas', function () {
    Idea::create([
        'description' => request('description'),
        'state' => 'pending',
    ]);

    return redirect('/ideas');
});

// destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/ideas');
});
