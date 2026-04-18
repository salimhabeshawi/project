<?php

use App\Models\User;

it('registers a user', function () {
    // When i visit the registration page
    visit('/register')
        ->fill('name', "Salim Ahmed")
        ->fill('email', "salimu@example.com")
        ->fill('password', "salimu123")
        ->press('@register-button')
        ->assertPathIs('/ideas');
    // then i should have an account
    expect(User::where('email', 'salimu@example.com')->exists())->toBe(true);
    // and i should be sighned in
    $this->assertAuthenticated();
    // and i should be on the /ideas page.
});
