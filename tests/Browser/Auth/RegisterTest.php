<?php

use App\Models\User;

it('user can create an account', function () {
    $page = visit('/register');

    $page
        ->fill('username', 'JohnDoe')
        ->fill('email', 'john@example.com')
        ->fill('password', 'password')
        ->submit();

    expect(User::where('email', 'john@example.com')->exists())->toBeTrue();

    $this->assertAuthenticated();

    $page->assertPathIs('/posts');

});
