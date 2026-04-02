<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    @include('partials.gtag-consent-head')
    <title>Wywóz Gruzu Narol - Usuwanie Odpadów Budowlanych | FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk</title>
    <meta name="description" content="Wywóz gruzu i humusu w Narolu - profesjonalne usuwanie odpadów budowlanych. Tel: 508 392 907">
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
            <h1 class="text-5xl font-bold mb-4">Wywóz Gruzu Narol</h1>
            <p class="text-xl text-gray-300">Profesjonalny wywóz i usuwanie odpadów budowlanych z całego terenu powiatu</p>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="bg-gray-50 py-4 px-4">
        <div class="max-w-7xl mx-auto">
            <a href="/" class="text-yellow-500 hover:text-yellow-600">Strona główna</a> / <a href="/#uslugi" class="text-yellow-500 hover:text-yellow-600">Usługi</a> / <span class="text-gray-600">Wywóz Gruzu</span>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Content -->
                <div class="md:col-span-2">
                    <h2 class="text-3xl font-bold mb-6">Profesjonalny Wywóz Gruzu i Odpadów</h2>
                    <p class="text-gray-700 mb-4 text-lg leading-relaxed">
                        Oferujemy kompleksowe usługi wywozu gruzu, odpadów budowlanych i humusu na terenie Narola i okolic. Dysponujemy odpowiednim sprzętem do szybkiego i bezpiecznego usuwania każdego rodzaju odpadów budowlanych.
                    </p>
                    <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                        Każdy projekt realizujemy profesjonalnie, dbając o porządek na budowie i odpowiedzialne postępowanie z odpadami. Gwarantujemy szybki odbiór i rozliczenie zgodne z obowiązującymi przepisami.
                    </p>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Rodzaje Odpadów</h2>
                    <div class="space-y-6">
                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Gruz Budowlany</h3>
                            <p class="text-gray-700">
                                Usuwanie gruzu ze ścinania, rozbiórki i prac remontowych. Transportujemy cegłę, beton, ceramikę i inne materiały budowlane.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Humus i Ziemia</h3>
                            <p class="text-gray-700">
                                Profesjonalny wywóz warstwy humusu i ziemi z terenu budowy. Idealne rozwiązanie przed przystąpieniem do robót ziemnych.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Materiały Podlegające Recyklingowi</h3>
                            <p class="text-gray-700">
                                Metal, drewno, tworzywa sztuczne i inne materiały podlegające recyklingowi. Zajmujemy się kompleksowym segregowaniem odpadów.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Odpady Betonowe</h3>
                            <p class="text-gray-700">
                                Przewóz i usuwanie starych betonów, fundamentów i konstrukcji betonowych. Pracujemy zgodnie z przepisami ochrony środowiska.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Materiały Ceramiczne i Cegła</h3>
                            <p class="text-gray-700">
                                Usuwanie starych cegieł, dachówek, kafelków i innych materiałów ceramicznych. Transport w specjalistycznych pojazadach.
                            </p>
                        </div>
                    </div>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Jak Wygląda Proces?</h2>
                    <div class="bg-blue-50 p-6 rounded-lg mb-6">
                        <ol class="space-y-4 text-lg text-gray-700">
                            <li class="flex items-start space-x-3">
                                <span class="bg-yellow-400 text-gray-900 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">1</span>
                                <span><strong>Kontakt</strong> - skontaktuj się z nami i opisz rodzaj i ilość odpadów</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="bg-yellow-400 text-gray-900 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">2</span>
                                <span><strong>Wycena</strong> - podamy koszt wywozu z uwzględnieniem rodzaju odpadów</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="bg-yellow-400 text-gray-900 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">3</span>
                                <span><strong>Odvóz</strong> - szybko wywozimy odpady z Twojej budowy</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="bg-yellow-400 text-gray-900 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">4</span>
                                <span><strong>Rozliczenie</strong> - prosta i przejrzysta faktura za usługę</span>
                            </li>
                        </ol>
                    </div>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Obszar Działalności</h2>
                    <div class="bg-green-50 p-6 rounded-lg border-l-4 border-green-500">
                        <p class="text-gray-700 text-lg mb-4">
                            Obsługujemy usługi wywozu gruzu na terenie:
                        </p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500 text-2xl">✓</span>
                                <span class="text-gray-700">Narol</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500 text-2xl">✓</span>
                                <span class="text-gray-700">Lubaczów</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500 text-2xl">✓</span>
                                <span class="text-gray-700">Tomaszów Lubelski</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500 text-2xl">✓</span>
                                <span class="text-gray-700">Cieszanów</span>
                            </div>
                            <div class="flex items-center space-x-2 md:col-span-2">
                                <span class="text-green-500 text-2xl">✓</span>
                                <span class="text-gray-700">Oraz całe okolice powiatu</span>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Dlaczego My?</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Szybki odbiór - wywóz w ciągu 24 godzin</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Profesjonalny zespół - doświadczeni w branży</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Nowoczesny tabor - pojazdy w doskonałym stanie</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Konkurencyjne ceny - transparentne wyceny</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Odpowiedzialne postępowanie - segregacja odpadów</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Gwarancja - porządek na budowie</span>
                        </li>
                    </ul>
                </div>

                <!-- Sidebar -->
                <div>
                    <div class="bg-yellow-50 p-8 rounded-lg shadow-md sticky top-24">
                        <h3 class="text-2xl font-bold mb-4">Zamów Wywóz Gruzu</h3>
                        <p class="text-gray-700 mb-6">
                            Oferujemy szybki i profesjonalny odbiór wszystkich rodzajów odpadów budowlanych.
                        </p>
                        <a href="tel:+48508392907" class="block w-full bg-yellow-400 text-gray-900 px-4 py-3 rounded-lg font-bold text-center hover:bg-yellow-500 transition mb-4">
                            Zadzwoń: 508 392 907
                        </a>
                        <a href="/#kontakt" class="block w-full border-2 border-yellow-400 text-yellow-600 px-4 py-3 rounded-lg font-bold text-center hover:bg-yellow-100 transition">
                            Kontakt telefoniczny
                        </a>

                        <div class="mt-8 pt-8 border-t-2 border-yellow-200">
                            <h4 class="font-bold mb-4">Dostępne Usługi:</h4>
                            <ul class="space-y-2 text-gray-700 text-sm">
                                <li>• Wywóz gruzu budowlanego</li>
                                <li>• Usuwanie humusu</li>
                                <li>• Transport materiałów ceramicznych</li>
                                <li>• Segregacja odpadów</li>
                                <li>• Odvóz betonów i fundamentów</li>
                                <li>• Transport drewna i metalu</li>
                            </ul>
                        </div>

                        <div class="mt-8 pt-8 border-t-2 border-yellow-200">
                            <h4 class="font-bold mb-4">Obszar Działania:</h4>
                            <ul class="space-y-2 text-gray-700">
                                <li>Narol</li>
                                <li>Lubaczów</li>
                                <li>Tomaszów Lubelski</li>
                                <li>Cieszanów</li>
                                <li>Oraz okolice</li>
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
            <h2 class="text-4xl font-bold mb-6">Masz Gruz do Wywozu?</h2>
            <p class="text-xl mb-8">Zadzwoń do nas i zamów szybki odbiór!</p>
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
