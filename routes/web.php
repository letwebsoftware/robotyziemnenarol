<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/uslugi/roboty-ziemne', 'services.roboty-ziemne')->name('roboty-ziemne');
Route::view('/uslugi/transport-kruszywa', 'services.transport-kruszywa')->name('transport-kruszywa');
Route::view('/uslugi/wywoz-gruzu', 'services.wywoz-gruzu')->name('wywoz-gruzu');
Route::view('/uslugi/uslugi-koparka', 'services.uslugi-koparka')->name('uslugi-koparka');
Route::get('/obszar-dzialania/{location}', LocationController::class)
    ->whereIn('location', array_keys(config('locations')))
    ->name('locations.show');

Route::get('/sitemap.xml', static function () {
    $urls = [
        ['route' => 'home', 'parameters' => [], 'priority' => '1.0'],
        ['route' => 'roboty-ziemne', 'parameters' => [], 'priority' => '0.8'],
        ['route' => 'transport-kruszywa', 'parameters' => [], 'priority' => '0.8'],
        ['route' => 'wywoz-gruzu', 'parameters' => [], 'priority' => '0.8'],
        ['route' => 'uslugi-koparka', 'parameters' => [], 'priority' => '0.8'],
    ];

    foreach (array_keys(config('locations')) as $location) {
        $urls[] = [
            'route' => 'locations.show',
            'parameters' => ['location' => $location],
            'priority' => '0.9',
        ];
    }

    $entries = collect($urls)
        ->map(static fn (array $url): string => sprintf(
            "<url>\n<loc>%s</loc>\n<changefreq>monthly</changefreq>\n<priority>%s</priority>\n</url>",
            htmlspecialchars(route($url['route'], $url['parameters']), ENT_XML1),
            $url['priority'],
        ))
        ->implode("\n");

    $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
{$entries}
</urlset>
XML;

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');
