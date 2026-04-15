<?php

it('registers a user', function () {
    // When i visit the registration page
    visit('/register')->debug();
    // and i fill out and submit the form,
    // then i should have an account
    // and i should be sighned in
    // and i should be on the /ideas page.
});
