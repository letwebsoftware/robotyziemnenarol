<div id="cookie-consent-banner" class="fixed inset-x-0 bottom-0 z-[90] hidden border-t border-gray-200 bg-white/95 p-4 shadow-[0_-8px_24px_rgba(0,0,0,0.1)] backdrop-blur sm:p-5">
    <div class="mx-auto flex max-w-7xl flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-sm text-gray-700">
            Używamy plików cookies do analityki ruchu (Google Analytics). Możesz zaakceptować albo odrzucić analityczne cookies.
        </p>
        <div class="flex shrink-0 items-center gap-2">
            <button id="cookie-consent-reject" type="button" class="rounded-md border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-100">
                Odrzuć
            </button>
            <button id="cookie-consent-accept" type="button" class="rounded-md bg-yellow-400 px-4 py-2 text-sm font-bold text-gray-900 transition hover:bg-yellow-500">
                Akceptuję
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

        const savedChoice = (() => {
            try {
                return localStorage.getItem(consentStorageKey);
            } catch (error) {
                return null;
            }
        })();

        if (savedChoice === 'accepted' || savedChoice === 'rejected') {
            hideBanner();
            return;
        }

        showBanner();

        acceptButton.addEventListener('click', () => {
            persistChoice('accepted');
            hideBanner();
        });

        rejectButton.addEventListener('click', () => {
            persistChoice('rejected');
            hideBanner();
        });
    })();
</script>
