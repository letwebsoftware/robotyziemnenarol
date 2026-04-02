<div id="cookie-consent-banner" class="fixed inset-x-0 bottom-0 z-[90] hidden border-t border-gray-200 bg-white/95 p-4 shadow-[0_-8px_24px_rgba(0,0,0,0.1)] backdrop-blur sm:p-5">
    <div class="mx-auto flex max-w-7xl flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-sm text-gray-700">
            Używamy plików cookies niezbędnych do działania strony oraz opcjonalnych cookies analitycznych i marketingowych.
        </p>
        <div class="flex shrink-0 items-center gap-2">
            <button id="cookie-consent-reject" type="button" class="rounded-md border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-100">
                Tylko niezbędne
            </button>
            <button id="cookie-consent-accept" type="button" class="rounded-md bg-yellow-400 px-4 py-2 text-sm font-bold text-gray-900 transition hover:bg-yellow-500">
                Akceptuj wszystkie
            </button>
        </div>
    </div>
</div>

<script>
    (() => {
        const consentStorageKey = 'cookie_consent_choice';
        const banner = document.getElementById('cookie-consent-banner');
        const acceptButton = document.getElementById('cookie-consent-accept');
        const rejectButton = document.getElementById('cookie-consent-reject');

        if (!banner || !acceptButton || !rejectButton) {
            return;
        }

        const allGtagConsent = {
            ad_storage: 'granted',
            ad_user_data: 'granted',
            ad_personalization: 'granted',
            analytics_storage: 'granted',
            functionality_storage: 'granted',
            security_storage: 'granted',
        };

        const necessaryOnlyGtagConsent = {
            ad_storage: 'denied',
            ad_user_data: 'denied',
            ad_personalization: 'denied',
            analytics_storage: 'denied',
            functionality_storage: 'granted',
            security_storage: 'granted',
        };

        const hideBanner = () => {
            banner.classList.add('hidden');
        };

        const showBanner = () => {
            banner.classList.remove('hidden');
        };

        const persistChoice = (choice) => {
            try {
                localStorage.setItem(consentStorageKey, choice);
            } catch (error) {
                // Ignore localStorage access errors.
            }
        };

        const publishConsentState = (choice) => {
            const isAllAccepted = choice === 'all';
            window.cookieConsent = {
                necessary: true,
                analytics: isAllAccepted,
                marketing: isAllAccepted,
                personalization: isAllAccepted,
            };

            document.dispatchEvent(
                new CustomEvent('cookie-consent-updated', {
                    detail: window.cookieConsent,
                })
            );
        };

        const updateGtagConsent = (choice) => {
            if (typeof window.gtag !== 'function') {
                return;
            }

            if (choice === 'all') {
                window.gtag('consent', 'update', allGtagConsent);
            } else {
                window.gtag('consent', 'update', necessaryOnlyGtagConsent);
            }
        };

        const savedChoice = (() => {
            try {
                return localStorage.getItem(consentStorageKey);
            } catch (error) {
                return null;
            }
        })();

        if (savedChoice === 'all' || savedChoice === 'necessary' || savedChoice === 'accepted' || savedChoice === 'rejected') {
            const normalizedChoice = savedChoice === 'accepted' ? 'all' : savedChoice === 'rejected' ? 'necessary' : savedChoice;
            publishConsentState(normalizedChoice);
            updateGtagConsent(normalizedChoice);
            hideBanner();
            return;
        }

        showBanner();

        acceptButton.addEventListener('click', () => {
            persistChoice('all');
            publishConsentState('all');
            updateGtagConsent('all');
            hideBanner();
        });

        rejectButton.addEventListener('click', () => {
            persistChoice('necessary');
            publishConsentState('necessary');
            updateGtagConsent('necessary');
            hideBanner();
        });
    })();
</script>
