<?php

it('renders an optimized page for every supported location', function (string $slug, string $name) {
    /** @var array<string, string> $location */
    $location = config("locations.{$slug}");
    $response = $this->get(route('locations.show', $slug));

    $response
        ->assertSuccessful()
        ->assertSee('Roboty ziemne i usługi koparką', false)
        ->assertSee($name)
        ->assertSee($location['title'])
        ->assertSee($location['description'])
        ->assertSee('<link rel="canonical"', false)
        ->assertSee(route('locations.show', $slug), false);

    $content = $response->getContent();

    expect(substr_count($content, '<h1'))->toBe(1)
        ->and(preg_match('/<script type="application\/ld\+json">(.*?)<\/script>/s', $content, $matches))->toBe(1);

    $structuredData = json_decode(trim($matches[1]), true, flags: JSON_THROW_ON_ERROR);

    expect($structuredData['areaServed']['name'])->toBe($name)
        ->and($structuredData['provider']['address']['addressLocality'])->toBe('Narol');
})->with([
    'Lubaczów' => ['lubaczow', 'Lubaczów'],
    'Tomaszów Lubelski' => ['tomaszow-lubelski', 'Tomaszów Lubelski'],
    'Zamość' => ['zamosc', 'Zamość'],
    'Bełżec' => ['belzec', 'Bełżec'],
]);

it('returns not found for an unsupported location', function () {
    $this->get('/obszar-dzialania/nieznane-miasto')->assertNotFound();
});

it('includes all location pages in the sitemap', function () {
    $response = $this->get(route('sitemap'));

    $response
        ->assertSuccessful()
        ->assertHeader('Content-Type', 'application/xml');

    foreach (array_keys(config('locations')) as $location) {
        $response->assertSee(route('locations.show', $location), false);
    }
});

it('links to every location page from the home page', function () {
    $response = $this->get(route('home'));

    foreach (array_keys(config('locations')) as $location) {
        $response->assertSee(route('locations.show', $location), false);
    }
});

it('uses unique metadata for location pages', function () {
    $locations = collect(config('locations'));

    expect($locations->pluck('title')->unique())->toHaveCount($locations->count())
        ->and($locations->pluck('description')->unique())->toHaveCount($locations->count());
});
