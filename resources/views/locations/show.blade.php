<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    @include('partials.gtag-consent-head')
    <title>{{ $location['title'] }} | Dziuraniuk</title>
    <meta name="description" content="{{ $location['description'] }}">
    <link rel="canonical" href="{{ route('locations.show', $location['slug']) }}">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="pl_PL">
    <meta property="og:title" content="{{ $location['title'] }}">
    <meta property="og:description" content="{{ $location['description'] }}">
    <meta property="og:url" content="{{ route('locations.show', $location['slug']) }}">
    <meta property="og:image" content="{{ url('/images/koparka.jpeg') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $location['title'] }}">
    <meta name="twitter:description" content="{{ $location['description'] }}">
    <meta name="twitter:image" content="{{ url('/images/koparka.jpeg') }}">

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => 'Roboty ziemne i usługi koparką — '.$location['name'],
            'description' => $location['description'],
            'url' => route('locations.show', $location['slug']),
            'areaServed' => [
                '@type' => 'City',
                'name' => $location['name'],
            ],
            'provider' => [
                '@type' => 'LocalBusiness',
                'name' => 'FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk',
                'telephone' => '+48508392907',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => 'UL. KOŚCIUSZKI DZ 415',
                    'postalCode' => '37-610',
                    'addressLocality' => 'Narol',
                    'addressCountry' => 'PL',
                ],
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased">
    <nav class="sticky top-0 z-50 border-b border-gray-200 bg-white/95 backdrop-blur">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="/logo_without_name.svg" alt="Dziuraniuk — roboty ziemne" class="h-10 w-auto">
                <span class="leading-tight">
                    <span class="block text-sm font-black uppercase tracking-wide">DZIURANIUK</span>
                    <span class="block text-xs text-gray-600">Roboty ziemne i transport kruszywa</span>
                </span>
            </a>
            <a href="tel:+48508392907" class="rounded-md bg-yellow-400 px-4 py-2 text-sm font-bold transition hover:bg-yellow-500">
                Zadzwoń: 508 392 907
            </a>
        </div>
    </nav>

    <header class="bg-gradient-to-br from-gray-900 to-gray-800 px-4 py-16 text-white sm:py-20">
        <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-2 md:items-center">
            <div>
                <nav aria-label="Okruszki" class="mb-5 text-sm text-gray-300">
                    <a href="{{ route('home') }}" class="hover:text-yellow-300">Strona główna</a>
                    <span aria-hidden="true"> / </span>
                    <span>{{ $location['name'] }}</span>
                </nav>
                <p class="mb-3 text-sm font-bold uppercase tracking-wider text-yellow-300">{{ $location['name'] }} i okolice</p>
                <h1 class="text-4xl font-black leading-tight sm:text-5xl">Roboty ziemne i usługi koparką w {{ $location['name_locative'] }}</h1>
                <p class="mt-6 max-w-2xl text-lg text-gray-300">{{ $location['lead'] }}</p>
                <a href="tel:+48508392907" class="mt-8 inline-flex rounded-md bg-yellow-400 px-6 py-3 font-bold text-gray-900 transition hover:bg-yellow-500">
                    Zapytaj o termin i wycenę
                </a>
            </div>
            <img src="/images/koparka.jpeg" alt="Roboty ziemne i usługi koparką w {{ $location['name_locative'] }}" class="h-80 w-full rounded-2xl object-cover shadow-2xl">
        </div>
    </header>

    <main>
        <section class="px-4 py-16 sm:py-20">
            <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-3">
                <article class="space-y-6 text-lg leading-8 text-gray-700 lg:col-span-2">
                    <h2 class="text-3xl font-black leading-tight text-gray-900">Roboty ziemne dopasowane do inwestycji w {{ $location['name_locative'] }}</h2>
                    <p>{{ $location['context'] }}</p>
                    <p>{{ $location['needs'] }}</p>
                    <p class="rounded-xl border-l-4 border-yellow-400 bg-yellow-50 p-5 text-base"><strong>Obszar obsługi:</strong> {{ $location['area_note'] }}</p>
                </article>
                <aside class="rounded-2xl bg-gray-50 p-6">
                    <h2 class="text-xl font-black">Najczęściej zamawiane prace</h2>
                    <ul class="mt-5 space-y-3 text-gray-700">
                        <li>Wykopy pod fundamenty i przyłącza</li>
                        <li>Niwelacja i podnoszenie terenu</li>
                        <li>Korytowanie dróg oraz wjazdów</li>
                        <li>Transport piasku i żwiru</li>
                        <li>Wywóz gruzu, humusu i ziemi</li>
                    </ul>
                </aside>
            </div>
        </section>

        <section class="bg-gray-50 px-4 py-16 sm:py-20">
            <div class="mx-auto max-w-7xl">
                <h2 class="text-3xl font-black">Zakres usług w {{ $location['name_locative'] }}</h2>
                <div class="mt-8 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                    <a href="{{ route('roboty-ziemne') }}" class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-yellow-400">
                        <h3 class="font-black">Roboty ziemne</h3>
                        <p class="mt-2 text-sm text-gray-600">Wykopy, przygotowanie działki i korytowanie nawierzchni.</p>
                    </a>
                    <a href="{{ route('uslugi-koparka') }}" class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-yellow-400">
                        <h3 class="font-black">Usługi koparką</h3>
                        <p class="mt-2 text-sm text-gray-600">Niwelacja, profilowanie i prace wymagające sprawnego sprzętu.</p>
                    </a>
                    <a href="{{ route('transport-kruszywa') }}" class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-yellow-400">
                        <h3 class="font-black">Transport kruszywa</h3>
                        <p class="mt-2 text-sm text-gray-600">Dowóz piasku i żwiru bezpośrednio na teren inwestycji.</p>
                    </a>
                    <a href="{{ route('wywoz-gruzu') }}" class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-yellow-400">
                        <h3 class="font-black">Wywóz gruzu</h3>
                        <p class="mt-2 text-sm text-gray-600">Odbiór materiału pozostałego po budowie i pracach ziemnych.</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="px-4 py-16 sm:py-20">
            <div class="mx-auto max-w-7xl">
                <h2 class="text-3xl font-black">Obsługiwane miejscowości</h2>
                <p class="mt-3 text-gray-600">Zobacz szczegóły usług i warunki dojazdu dla pozostałych lokalizacji.</p>
                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                    <a href="{{ route('home') }}" class="rounded-lg border border-gray-200 bg-white p-4 text-center font-bold transition hover:border-yellow-400">
                        Narol
                    </a>
                    @foreach ($locations as $otherLocation)
                        <a href="{{ route('locations.show', $otherLocation['slug']) }}" @class([
                            'rounded-lg border p-4 text-center font-bold transition hover:border-yellow-400',
                            'border-yellow-400 bg-yellow-50' => $otherLocation['slug'] === $location['slug'],
                            'border-gray-200 bg-white' => $otherLocation['slug'] !== $location['slug'],
                        ])>
                            {{ $otherLocation['name'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-br from-gray-900 to-gray-800 px-4 py-16 text-center text-white">
            <div class="mx-auto max-w-3xl">
                <h2 class="text-3xl font-black">Potrzebujesz robót ziemnych w {{ $location['name_locative'] }}?</h2>
                <p class="mt-4 text-gray-300">Opisz zakres prac, lokalizację i oczekiwany termin. Telefonicznie szybko ustalimy, jakiego sprzętu i transportu potrzebujesz.</p>
                <a href="tel:+48508392907" class="mt-8 inline-flex rounded-md bg-yellow-400 px-6 py-3 font-bold text-gray-900 transition hover:bg-yellow-500">
                    Zadzwoń: 508 392 907
                </a>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 px-4 py-8 text-center text-sm text-gray-300">
        <p>&copy; {{ now()->year }} FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk — roboty ziemne i transport kruszywa</p>
    </footer>

    @include('partials.gtag-consent-banner')
</body>
</html>
