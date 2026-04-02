<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <title>Roboty Ziemne Narol | Usługi Koparką i Transport Kruszywa - FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk</title>
    <meta name="description" content="Roboty ziemne i transport kruszywa w Narolu i okolicach. Wykopy pod fundamenty, usługi koparką, niwelacja terenu, wywóz gruzu i humusu. Tel: 508 392 907.">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="pl_PL">
    <meta property="og:title" content="Roboty Ziemne Narol | Usługi Koparką i Transport Kruszywa - FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk">
    <meta property="og:description" content="Lokalny wykonawca robót ziemnych i transportu kruszywa: Narol, Lubaczów, Cieszanów, Tomaszów Lubelski.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('/images/koparka.jpeg') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Roboty Ziemne Narol | Usługi Koparką i Transport Kruszywa - FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk">
    <meta name="twitter:description" content="Wykopy, niwelacja terenu, transport piasku i żwiru, wywóz gruzu. Szybkie terminy realizacji.">
    <meta name="twitter:image" content="{{ url('/images/koparka.jpeg') }}">

    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "LocalBusiness",
            "name": "FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk",
            "image": "{{ url('/images/koparka.jpeg') }}",
            "telephone": "+48508392907",
            "vatID": "7931286479",
            "identifier": "015406029",
            "url": "{{ url('/') }}",
            "address": {
                "@@type": "PostalAddress",
                "streetAddress": "UL. KOŚCIUSZKI DZ 415",
                "postalCode": "37-610",
                "addressLocality": "Narol",
                "addressRegion": "podkarpackie",
                "addressCountry": "PL"
            },
            "areaServed": [
                "Narol",
                "Lubaczów",
                "Cieszanów",
                "Tomaszów Lubelski"
            ],
            "serviceType": [
                "Roboty ziemne",
                "Usługi koparką",
                "Wykopy pod fundamenty",
                "Transport kruszywa",
                "Wywóz gruzu",
                "Niwelacja terenu"
            ]
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased">
    <nav class="sticky top-0 z-50 border-b border-gray-200 bg-white/95 backdrop-blur">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="/logo_without_name.svg" alt="FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk" class="h-10 w-auto">
                <span class="leading-tight">
                    <span class="block text-sm font-black uppercase tracking-wide text-gray-900">DZIURANIUK</span>
                    <span class="block text-xs text-gray-600">Roboty ziemne i transport kruszywa</span>
                </span>
            </a>

            <div class="hidden items-center gap-6 md:flex">
                <a href="#uslugi" class="text-sm font-semibold text-gray-700 transition hover:text-gray-900">Usługi</a>
                <a href="#realizacje" class="text-sm font-semibold text-gray-700 transition hover:text-gray-900">Realizacje</a>
                <a href="#obszar" class="text-sm font-semibold text-gray-700 transition hover:text-gray-900">Obszar działania</a>
                <a href="#kontakt" class="text-sm font-semibold text-gray-700 transition hover:text-gray-900">Kontakt</a>
            </div>

            <a href="tel:+48508392907" class="rounded-md bg-yellow-400 px-4 py-2 text-sm font-bold text-gray-900 transition hover:bg-yellow-500">
                Zadzwoń: 508 392 907
            </a>
        </div>
    </nav>

    <header class="bg-gradient-to-br from-gray-900 to-gray-800 px-4 py-20 text-white sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-12 md:grid-cols-2 md:items-center">
            <div>
                <p class="mb-4 inline-block rounded-full border border-yellow-400/40 bg-yellow-400/10 px-4 py-1 text-xs font-semibold uppercase tracking-wider text-yellow-300">
                    Narol i okolice
                </p>
                <h1 class="mb-6 text-4xl font-black leading-tight sm:text-5xl lg:text-6xl">
                    Roboty ziemne i usługi koparką w Narolu
                </h1>
                <p class="mb-8 max-w-2xl text-lg text-gray-300">
                    Wykopy pod fundamenty, przyłącza wodno-kanalizacyjne, niwelacja terenu oraz transport kruszywa.
                    Realizacje dla klientów indywidualnych, firm i inwestorów.
                </p>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <a href="tel:+48508392907" class="inline-flex items-center justify-center rounded-md bg-yellow-400 px-6 py-3 text-base font-bold text-gray-900 transition hover:bg-yellow-500">
                        Skontaktuj się telefonicznie
                    </a>
                    <a href="#kontakt" class="inline-flex items-center justify-center rounded-md border border-yellow-400 px-6 py-3 text-base font-bold text-yellow-300 transition hover:bg-yellow-400 hover:text-gray-900">
                        Poproś o wycenę
                    </a>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl shadow-2xl">
                <img src="/images/koparka.jpeg" alt="Usługi koparką i roboty ziemne w Narolu" class="h-full w-full object-cover object-[50%_45%] scale-110 md:scale-150">
            </div>
        </div>
    </header>

    <section id="uslugi" class="px-4 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-3xl font-black text-gray-900 sm:text-4xl">Usługi ziemne i transportowe</h2>
            <p class="mt-3 max-w-3xl text-gray-600">
                Specjalizujemy się w usługach lokalnych z szybkim dojazdem na teren budowy i terminową realizacją.
            </p>

            <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                <a href="{{ route('roboty-ziemne') }}" class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-yellow-400 hover:shadow-md">
                    <h3 class="text-lg font-black text-gray-900">Roboty ziemne</h3>
                    <p class="mt-2 text-sm text-gray-600">Wykopy, korytowanie dróg, przygotowanie terenu pod inwestycje.</p>
                </a>
                <a href="{{ route('uslugi-koparka') }}" class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-yellow-400 hover:shadow-md">
                    <h3 class="text-lg font-black text-gray-900">Usługi koparką</h3>
                    <p class="mt-2 text-sm text-gray-600">Niwelacja, podnoszenie terenu i prace precyzyjne przy budowie.</p>
                </a>
                <a href="{{ route('transport-kruszywa') }}" class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-yellow-400 hover:shadow-md">
                    <h3 class="text-lg font-black text-gray-900">Transport kruszywa</h3>
                    <p class="mt-2 text-sm text-gray-600">Dostawa piasku i żwiru na budowę we wskazanym terminie.</p>
                </a>
                <a href="{{ route('wywoz-gruzu') }}" class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-yellow-400 hover:shadow-md">
                    <h3 class="text-lg font-black text-gray-900">Wywóz gruzu i humusu</h3>
                    <p class="mt-2 text-sm text-gray-600">Sprawny odbiór materiału po robotach i przygotowaniu terenu.</p>
                </a>
            </div>

            <div class="mt-10 rounded-2xl bg-gray-50 p-6 sm:p-8">
                <h3 class="text-xl font-black text-gray-900">Zakres prac</h3>
                <ul class="mt-4 grid gap-3 text-sm text-gray-700 sm:grid-cols-2 lg:grid-cols-3">
                    <li>Roboty ziemne</li>
                    <li>Wykopy pod fundamenty</li>
                    <li>Przyłącza wody i kanalizacji</li>
                    <li>Korytowanie dróg</li>
                    <li>Niwelacja i podnoszenie terenu</li>
                    <li>Transport kruszyw: piasek, żwir</li>
                    <li>Wywóz gruzu i humusu</li>
                    <li>Dowóz ziemi na budowę</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="realizacje" class="bg-white px-4 pb-16 sm:pb-20">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-3xl font-black text-gray-900 sm:text-4xl">Realizacje</h2>
            <p class="mt-3 max-w-3xl text-gray-600">Przykładowe prace wykonane na terenie Narola i okolicznych miejscowości.</p>
            <div class="mt-10 grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-5">
                <img src="/images/koparka.jpeg" alt="Koparka podczas robót ziemnych w Narolu" class="h-44 w-full rounded-lg object-cover shadow-sm">
                <img src="/images/minikoparka.jpeg" alt="Minikoparka przy pracach ziemnych" class="h-44 w-full rounded-lg object-cover shadow-sm">
                <img src="/images/fundamenty_wykop.jpeg" alt="Wykop pod fundamenty" class="h-44 w-full rounded-lg object-cover shadow-sm">
                <img src="/images/kruszywo.jpeg" alt="Transport kruszywa na budowę" class="h-44 w-full rounded-lg object-cover shadow-sm">
                <img src="/images/auto_dostawcze.jpeg" alt="Dostawa materiałów budowlanych" class="h-44 w-full rounded-lg object-cover shadow-sm">
            </div>
        </div>
    </section>

    <section id="obszar" class="bg-gray-50 px-4 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-3xl font-black text-gray-900 sm:text-4xl">Obszar działania</h2>
            <p class="mt-3 text-gray-600">Dojeżdżamy na inwestycje lokalne i obsługujemy zamówienia z transportem materiałów.</p>
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-lg border border-gray-200 bg-white p-4 text-center font-bold text-gray-800">Narol</div>
                <div class="rounded-lg border border-gray-200 bg-white p-4 text-center font-bold text-gray-800">Lubaczów</div>
                <div class="rounded-lg border border-gray-200 bg-white p-4 text-center font-bold text-gray-800">Cieszanów</div>
                <div class="rounded-lg border border-gray-200 bg-white p-4 text-center font-bold text-gray-800">Tomaszów Lubelski</div>
            </div>
        </div>
    </section>

    <section id="kontakt" class="bg-gradient-to-br from-gray-900 to-gray-800 px-4 py-16 text-white sm:py-20">
        <div class="mx-auto max-w-7xl text-center">
            <h2 class="text-3xl font-black sm:text-4xl">Kontakt i szybka wycena</h2>
            <p class="mt-4 text-gray-300">Najszybszy kontakt telefoniczny.</p>
            <div class="mx-auto mt-8 grid max-w-7xl gap-6 text-left md:grid-cols-3">
                <div class="space-y-4 md:col-span-1">
                    <div class="rounded-xl border border-gray-700 bg-gray-800/60 p-5 text-sm">
                        <p class="font-bold text-yellow-300">FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk</p>
                        <p class="mt-2"><span class="font-semibold text-gray-300">NIP:</span> 7931286479</p>
                        <p><span class="font-semibold text-gray-300">REGON:</span> 01540602900000</p>
                        <p><span class="font-semibold text-gray-300">Adres:</span> UL. KOŚCIUSZKI DZ 415, 37-610, NAROL</p>
                        <p><span class="font-semibold text-gray-300">Województwo:</span> podkarpackie</p>
                    </div>
                    <div class="rounded-xl border border-gray-700 bg-gray-800/60 p-5 text-sm">
                        <p class="font-bold text-yellow-300">Kontakt</p>
                        <p class="mt-2">
                            <span class="font-semibold text-gray-300">Tel. główny:</span>
                            <a href="tel:+48508392907" class="font-semibold text-white hover:text-yellow-200">+48 508 392 907</a>
                        </p>
                        <p>
                            <span class="font-semibold text-gray-300">Dodatkowy:</span>
                            <a href="tel:+48509907121" class="font-semibold text-white hover:text-yellow-200">+48 509 907 121</a>
                        </p>
                    </div>
                </div>
                <div class="overflow-hidden rounded-xl border border-gray-700 md:col-span-2">
                    <h3 class="bg-gray-800/80 px-4 py-3 text-left text-sm font-bold text-yellow-300">Mapa dojazdu</h3>
                    <iframe
                        title="Mapa dojazdu - FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk"
                        src="https://www.google.com/maps?q=FIRMA%20HANDLOWO-US%C5%81UGOWA%20Les%C5%82aw%20Dziuraniuk%2C%20Narol&z=16&output=embed"
                        width="100%"
                        height="420"
                        style="border:0;"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <a href="tel:+48508392907" class="mt-8 inline-flex rounded-md bg-yellow-400 px-6 py-3 font-bold text-gray-900 transition hover:bg-yellow-500">
                Zadzwoń teraz
            </a>
        </div>
    </section>

    <footer class="bg-gray-900 px-4 py-8 text-sm text-gray-300">
        <div class="mx-auto flex max-w-7xl flex-col gap-2 text-center sm:flex-row sm:items-center sm:justify-between sm:text-left">
            <p>&copy; {{ now()->year }} FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk - Roboty ziemne i transport kruszywa</p>
            <p>Narol | UL. KOŚCIUSZKI DZ 415</p>
        </div>
    </footer>
</body>
</html>
