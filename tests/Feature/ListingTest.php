<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\get;

// runs php artisan migrate:refresh before each test
uses(RefreshDatabase::class);

it('greets the user if they are signed out', function () {
    get('/')

        ->assertSee('Home')

        ->assertSee('Sign up to get started')

        ->assertDontSee(['Feed', 'My books', 'Add a book', 'Friend']);
});