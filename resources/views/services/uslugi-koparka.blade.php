<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    @include('partials.gtag-consent-head')
    <title>Usługi Koparką Narol - Niwelacja Terenu, Wykopy | FIRMA HANDLOWO USŁUGOWA Lesław Józef Dziuraniuk</title>
    <meta name="description" content="Usługi koparką w Narolu - niwelacja terenu, wykopy, podnoszenie terenu. Tel: 508 392 907">
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
            <h1 class="text-5xl font-bold mb-4">Usługi Koparką Narol</h1>
            <p class="text-xl text-gray-300">Profesjonalne usługi nowoczesną koparką - niwelacja terenu, wyrównanie, wykopy</p>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="bg-gray-50 py-4 px-4">
        <div class="max-w-7xl mx-auto">
            <a href="/" class="text-yellow-500 hover:text-yellow-600">Strona główna</a> / <a href="/#uslugi" class="text-yellow-500 hover:text-yellow-600">Usługi</a> / <span class="text-gray-600">Usługi Koparką</span>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Content -->
                <div class="md:col-span-2">
                    <h2 class="text-3xl font-bold mb-6">Kompleksowe Usługi Koparką</h2>
                    <p class="text-gray-700 mb-4 text-lg leading-relaxed">
                        Dysponujemy nowoczesną i niezawodną koparką, którą wykonujemy szeroką gamę prac ziemnych. Naszą specjalizacją są prace wymagające precyzji i doświadczenia.
                    </p>
                    <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                        Każdy projekt realizujemy z dbałością o najwyższą jakość i bezpieczeństwo. Nasz doświadczony operator gwarantuje precyzyjne wykonanie każdej pracy.
                    </p>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Zakres Naszych Usług</h2>
                    <div class="space-y-6">
                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Wykopaliska i Wykopaliska</h3>
                            <p class="text-gray-700">
                                Profesjonalne kopanie wykopów o każdej wielkości i głębokości. Używamy nowoczesnego sprzętu zapewniającego precyzyjne wykonanie.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Niwelacja Terenu</h3>
                            <p class="text-gray-700">
                                Wyrównanie nierównych powierzchni na terenie budowy. Idealne rozwiązanie dla terenów o zmiennym ukształtowaniu.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Podnoszenie Terenu</h3>
                            <p class="text-gray-700">
                                Podnoszenie wysokości terenu za pomocą wsypywania materiałów. Pracujemy z żwirem, piaskiem i innymi materiałami budowlanymi.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Rozluźnianie i Zagęszczanie</h3>
                            <p class="text-gray-700">
                                Rozluźnianie zalegającej ziemi i zagęszczanie powierzchni. Niezbędne prace w przygotowaniu terenu do budowy.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Załadunek i Transport</h3>
                            <p class="text-gray-700">
                                Załadunek ziemi, gruzu i innych materiałów do transportu. Szybka i precyzyjna praca gwarantująca bezpieczeństwo.
                            </p>
                        </div>

                        <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-2xl font-bold mb-2">Prace Dodatkowe</h3>
                            <p class="text-gray-700">
                                Prace specjalistyczne dostosowane do potrzeb Twojej budowy. Zapraszamy do kontaktu w celu omówienia indywidualnych wymagań.
                            </p>
                        </div>
                    </div>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Nasze Maszyny</h2>
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500">
                            <h3 class="text-2xl font-bold mb-2">Koparka Kołowa</h3>
                            <p class="text-gray-700 mb-3">
                                Niezawodna koparka kołowa o dużej mocy i zasięgu. Sprawdza się przy pracach ziemnych na budowach i dojazdach lokalnych.
                            </p>
                            <ul class="text-gray-700 space-y-1 text-sm">
                                <li>• Pojemność łyżki: 0,8-1,2 m³</li>
                                <li>• Głębokość kopania: do 6 m</li>
                                <li>• Obsługujemy sieci w gruncie</li>
                            </ul>
                        </div>

                        <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500">
                            <h3 class="text-2xl font-bold mb-2">Minikoparka</h3>
                            <p class="text-gray-700 mb-3">
                                Mała koparka zapewniająca dostęp do trudnodostępnych miejsc i prac precyzyjnych. Nieszkodliwa dla otaczającej infrastruktury.
                            </p>
                            <ul class="text-gray-700 space-y-1 text-sm">
                                <li>• Idealna do prac precyzyjnych</li>
                                <li>• Mały promień działania</li>
                                <li>• Łatwy transport</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Dlaczego My?</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Doświadczony operator - wieloletnia praktyka w branży</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Nowoczesny sprzęt - maszyny w doskonałym stanie technicznym</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Precyzja pracy - najwyższa dokładność w wykonaniu</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Bezpieczeństwo - wszystkie prace wykonywane bezpiecznie</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Konkurencyjne ceny - przejrzyste wyceny bez ukrytych kosztów</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-2xl text-yellow-400">✓</span>
                            <span>Elastyczność - dostosowujemy harmonogram do Twoich potrzeb</span>
                        </li>
                    </ul>

                    <h2 class="text-3xl font-bold mb-6 mt-10">Galeria - Usługi Koparką</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <img src="/images/koparka.jpeg" alt="Koparka przy pracy" class="rounded-lg shadow-md h-64 object-cover">
                        <img src="/images/minikoparka.jpeg" alt="Minikoparka do prac precyzyjnych" class="rounded-lg shadow-md h-64 object-cover">
                        <img src="/images/fundamenty_wykop.jpeg" alt="Wykop pod fundamenty koparką" class="rounded-lg shadow-md h-64 object-cover">
                        <img src="/images/fundamenty_wykop_2.jpeg" alt="Prace koparką na budowie" class="rounded-lg shadow-md h-64 object-cover">
                    </div>
                </div>

                <!-- Sidebar -->
                <div>
                    <div class="bg-yellow-50 p-8 rounded-lg shadow-md sticky top-24">
                        <h3 class="text-2xl font-bold mb-4">Wynajmij Koparkę</h3>
                        <p class="text-gray-700 mb-6">
                            Oferujemy profesjonalne usługi koparką z doświadczonym operatorem. Gwarantujemy precyzję i bezpieczeństwo.
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
                                <li>• Wykopaliska</li>
                                <li>• Niwelacja terenu</li>
                                <li>• Podnoszenie terenu</li>
                                <li>• Załadunek materiałów</li>
                                <li>• Rozluźnianie gruntu</li>
                                <li>• Prace specjalistyczne</li>
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

                        <div class="mt-8 pt-8 border-t-2 border-yellow-200">
                            <h4 class="font-bold mb-4">Godziny Dostępności:</h4>
                            <p class="text-gray-700 text-sm">
                                Pracujemy elastycznie<br>
                                Możliwość zaplanowania pracy w Twoim harmonogramie
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-gray-900 py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">Potrzebujesz koparki?</h2>
            <p class="text-xl mb-8">Skontaktuj się z nami i zamów usługi koparką!</p>
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
