<?php

use App\Models\User;

it('shows all Ideas', function () {
    // given i am signed in
    $this->actingAs($user = User::factory()->create());
    // and i have idea in the db
    $user->ideas()->create([
        'description' => 'Build a thing',
    ]);
    // when i visit /ideas
    visit('/ideas')
        ->assertSee('Build a thing');
    // i should see my one idea
});

it('shows an idea', function () {
    // given i am signed in
    $this->actingAs($user = User::factory()->create());
    // and i have an idea in the db
    $idea = $user->ideas()->create([
        'description' => 'Launch a new feature',
    ]);

    // when i visit the single idea page
    visit("/ideas/{$idea->id}")
        ->assertSee('Launch a new feature');
    // then i should see the idea details
});

it('shows an edit form to update an idea', function () {
    // given i am signed in
    $this->actingAs($user = User::factory()->create());
    // and i have an idea in the db
    $idea = $user->ideas()->create([
        'description' => 'Improve onboarding',
    ]);

    // when i visit the edit page for the idea
    visit("/ideas/{$idea->id}/edit")
        ->assertSee('Edit Idea')
        ->assertSee('Improve onboarding')
        ->assertSee('Update');
    // then i should see the edit form
});
