<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LocationController extends Controller
{
    public function __invoke(string $location): View
    {
        /** @var array<string, mixed>|null $locationData */
        $locationData = config("locations.{$location}");

        abort_unless(is_array($locationData), 404);

        /** @var array<string, array<string, mixed>> $locations */
        $locations = config('locations', []);

        return view('locations.show', [
            'location' => $locationData,
            'locations' => $locations,
        ]);
    }
}
