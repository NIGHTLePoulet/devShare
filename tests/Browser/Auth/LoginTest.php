<?php

use App\Models\User;

it('user can log in', function () {
    User::factory()->create([
        'username' => 'JohnDoe',
        'email' => 'johndoe@example.com',
        'password'=> 'password',
    ]);

    $page = visit('/login');

    $page
        ->fill('email', 'johndoe@example.com')
        ->fill('password', 'password')
        ->submit();

    $this->assertAuthenticated();

    $page->assertPathis('/');
});

it('user can log out', function () {
    $user = User::factory()->create([
        'username' => 'JohnDoe',
        'email' => 'johndoe@example.com',
        'password'=> 'password',
    ]);

    $this->actingAs($user)
    ->delete(route('logout'))
    ->assertRedirectToRoute('login');

    $this->assertGuest();
});
