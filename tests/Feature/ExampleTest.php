<?php

declare(strict_types=1);

use Candtry\Candtry\Candtry;

it('resolves the singleton', function () {
    expect(app(Candtry::class))->toBeInstanceOf(Candtry::class);
});

it('returns the same instance from the container', function () {
    expect(app(Candtry::class))->toBe(app(Candtry::class));
});

it('merges the package config', function () {
    expect(config('candtry.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('candtry::messages.placeholder'))->toBe('Candtry placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('candtry::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('candtry:placeholder')
        ->expectsOutputToContain('Candtry placeholder command executed.')
        ->assertSuccessful();
});
