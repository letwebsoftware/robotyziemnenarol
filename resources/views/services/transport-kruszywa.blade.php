<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    @include('partials.gtag-consent-head')
    <title>Transport Kruszywa Narol - Piasek, Żwir, Dostawa | FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk</title>
    <meta name="description" content="Transport kruszywa w Narolu - dostawa piasku, żwiru i materiałów budowlanych. Tel: 508 392 907">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center space-x-2">
                    <img src="/logo_without_name.svg" alt="FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk" class="h-10 w-auto">
                    <div>
                        <p class="font-bold text-lg">DZIURANIUK</p>
                        <p class="text-xs text-gray-600">Roboty Ziemne</p>
                    </div>
                </a>
                <div class="hidden md:flex space-x-6">
                    <a href="/#hero" class="text-gray-700 hover:text-yellow-500">Strona główna</a>
                    <a href="/#uslugi" class="text-gray-700 hover:text-yellow-500">Usługi</a>
                    <a href="/#galeria" class="text-gray-700 hover:text-yellow-500">Galeria</a>
                    <a href="/#kontakt" class="text-gray-700 hover:text-yellow-500">Kontakt</a>
                </div>
                <a href="tel:+48508392907" class="bg-yellow-400 text-gray-900 px-4 py-2 rounded font-bold hover:bg-yellow-500 transition">
                    Zadzwoń
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="bg-gradient-to-br from-gray-900 to-gray-800 text-white py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-5xl font-bold mb-4">Transport Kruszywa Narol</h1>
            <p class="text-xl text-gray-300">Dostawa piasku, żwiru i materiałów budowlanych na teren całego powiatu</p>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="bg-gray-50 py-4 px-4">
        <div class="max-w-7xl mx-auto">
            <a href="/" class="text-yellow-500 hover:text-yellow-600">Strona główna</a> / <a href="/#uslugi" class="text-yellow-500 hover:text-yellow-600">Usługi</a> / <span class="text-gray-600">Transport Kruszywa</span>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Content -->
                <div class="md:col-span-2">
                    <h2 class="text-3xl font-bold mb-6">Transport Kruszywa - Kompleksowe Rozwiązania</h2>
                    <p class="text-gray-700 mb-4 text-lg leading-relaxed">
                        Oferujemy profesjonalny transport kruszyw i materiałów budowlanych na terenie Narola i okolic. Dysponujemy nowoczesnym taborem samochodowym, który gwarantuje szybką i bezpieczną dostawę.
                    </p>
                    <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                        Każdy transport realizujemy z dbałością o najwyższą jakość usługi. Materiały są dostarczane w czystych pojazdach i gotowe do natychmiastowego użycia.
                    </p>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Rodzaje Materiałów</h2>
                    <div class="space-y-6">
                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Piasek Zwykły</h3>
                            <p class="text-gray-700">
                                Piasek budowlany wysokiej jakości, idealny do mieszania z cementem na zaprawę murarską. Dostarczamy w ładunkach od kilku ton.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Piasek Żółty</h3>
                            <p class="text-gray-700">
                                Piasek żółty o charakterystycznym kolorze, doskonały do wyrównywania terenu i obsypywania fundamentów. Materiał naturalny, bez domieszek.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Piasek Rzeczny</h3>
                            <p class="text-gray-700">
                                Piasek rzeczny wysokiej klasy, idealny do zaawansowanych konstrukcji betonowych. Odpowiada najwyższym normom budowlanym.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Żwir</h3>
                            <p class="text-gray-700">
                                Żwir budowlany w różnych frakcjach - idealny do tworzenia podbudowy, drenażu i wyrównywania terenu na potrzeby budowy.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Kruszywo</h3>
                            <p class="text-gray-700">
                                Kruszywo budowlane w różnych wymiarach ziaren. Niezbędny materiał do każdej większej budowy i prac ziemnych.
                            </p>
                        </div>
                    </div>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Jak Zamawiamy Transport?</h2>
                    <div class="bg-blue-50 p-6 rounded-lg mb-6">
                        <ol class="space-y-4 text-lg text-gray-700">
                            <li class="flex items-start space-x-3">
                                <span class="bg-yellow-400 text-gray-900 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">1</span>
                                <span><strong>Zadzwoń do nas</strong> - 508 392 907 i opisz swoją potrzebę</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="bg-yellow-400 text-gray-900 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">2</span>
                                <span><strong>Podaj szczegóły</strong> - rodzaj materiału, ilość i adres dostawy</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="bg-yellow-400 text-gray-900 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">3</span>
                                <span><strong>Otrzymaj wycenę</strong> - transparentna cena bez ukrytych opłat</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="bg-yellow-400 text-gray-900 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">4</span>
                                <span><strong>Dostarczamy</strong> - transport w umówionym terminie</span>
                            </li>
                        </ol>
                    </div>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Dlaczego My?</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Szybka dostawa - transport w ciągu 24-48 godzin</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Sprawna logistyka - terminowe dostawy zgodnie z ustaleniami</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Konkurencyjne ceny - transparentne wyceny bez ukrytych kosztów</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Materiały wysokiej jakości - sprawdzone źródła dostaw</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Elastyczność - możliwość załadunku materiału w dowolnym momencie</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Profesjonalna obsługa - bezpieczeństwo transportu gwarantowane</span>
                        </li>
                    </ul>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Galeria - Transport Materiałów</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <img src="/images/piasek.jpeg" alt="Piasek budowlany" class="rounded-lg shadow-md h-64 object-cover">
                        <img src="/images/piasek_rzeczny.jpeg" alt="Piasek rzeczny" class="rounded-lg shadow-md h-64 object-cover">
                        <img src="/images/piasek_żółty.jpeg" alt="Piasek żółty" class="rounded-lg shadow-md h-64 object-cover">
                        <img src="/images/żwir.jpeg" alt="Żwir" class="rounded-lg shadow-md h-64 object-cover">
                    </div>
                </div>

                <!-- Sidebar -->
                <div>
                    <div class="bg-yellow-50 p-8 rounded-lg shadow-md sticky top-24">
                        <h3 class="text-2xl font-bold mb-4">Zamów Transport</h3>
                        <p class="text-gray-700 mb-6">
                            Dostarczamy kruszywa i materiały budowlane na terenie całego powiatu. Szybko i niezawodnie.
                        </p>
                        <a href="tel:+48508392907" class="block w-full bg-yellow-400 text-gray-900 px-4 py-3 rounded-lg font-bold text-center hover:bg-yellow-500 transition mb-4">
                            Zadzwoń: 508 392 907
                        </a>
                        <a href="/#kontakt" class="block w-full border-2 border-yellow-400 text-yellow-600 px-4 py-3 rounded-lg font-bold text-center hover:bg-yellow-100 transition">
                            Kontakt telefoniczny
                        </a>

                        <div class="mt-8 pt-8 border-t-2 border-yellow-200">
                            <h4 class="font-bold mb-4">Obszar Dostawy:</h4>
                            <ul class="space-y-2 text-gray-700">
                                <li>Narol</li>
                                <li>Lubaczów</li>
                                <li>Tomaszów Lubelski</li>
                                <li>Cieszanów</li>
                                <li>Oraz okolice</li>
                            </ul>
                        </div>

                        <div class="mt-8 pt-8 border-t-2 border-yellow-200">
                            <h4 class="font-bold mb-4">Dostępne Materiały:</h4>
                            <ul class="space-y-2 text-gray-700 text-sm">
                                <li>• Piasek zwykły</li>
                                <li>• Piasek żółty</li>
                                <li>• Piasek rzeczny</li>
                                <li>• Żwir</li>
                                <li>• Kruszywo</li>
                                <li>• Inne materiały na zamówienie</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-gray-900 py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">Potrzebujesz Dostawy Kruszywa?</h2>
            <p class="text-xl mb-8">Zamów transport kruszyw już dzisiaj!</p>
            <a href="tel:+48508392907" class="bg-gray-900 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-800 transition inline-block">
                Zadzwoń: 508 392 907
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-gray-300 py-8 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h4 class="font-bold text-white mb-4">FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk</h4>
                    <p>Roboty ziemne i transport kruszywa na terenie Narola i okolic.</p>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Usługi</h4>
                    <ul class="space-y-2">
                        <li><a href="/uslugi/roboty-ziemne" class="hover:text-white">Roboty Ziemne</a></li>
                        <li><a href="/uslugi/transport-kruszywa" class="hover:text-white">Transport Kruszywa</a></li>
                        <li><a href="/uslugi/uslugi-koparka" class="hover:text-white">Usługi Koparką</a></li>
                        <li><a href="/uslugi/wywoz-gruzu" class="hover:text-white">Wywóz Gruzu</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Kontakt</h4>
                    <p>Tel. główny: <a href="tel:+48508392907" class="text-yellow-400 hover:text-yellow-300">+48 508 392 907</a></p>
                    <p>Dodatkowy: <a href="tel:+48509907121" class="text-yellow-400 hover:text-yellow-300">+48 509 907 121</a></p>
                </div>
            </div>
            <hr class="border-gray-700 mb-4">
            <div class="text-center">
                <p>&copy; {{ now()->year }} FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk - Roboty Ziemne. Wszelkie prawa zastrzeżone.</p>
            </div>
        </div>
    </footer>
    @include('partials.gtag-consent-banner')
</body>
</html>
