<!-- Google tag (gtag.js) + Consent Mode -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BX8PN8NK6Z"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    window.gtag = window.gtag || function () {
        window.dataLayer.push(arguments);
    };

    const gtagConsentGranted = {
        ad_storage: 'granted',
        ad_user_data: 'granted',
        ad_personalization: 'granted',
        analytics_storage: 'granted',
    };

    const gtagConsentDenied = {
        ad_storage: 'denied',
        ad_user_data: 'denied',
        ad_personalization: 'denied',
        analytics_storage: 'denied',
    };

    gtag('consent', 'default', {
        ...gtagConsentGranted,
        wait_for_update: 500,
    });

    gtag('js', new Date());
    gtag('config', 'G-BX8PN8NK6Z');

    try {
        const savedConsent = localStorage.getItem('cookie_consent_choice');

        if (savedConsent === 'accepted') {
            gtag('consent', 'update', gtagConsentGranted);
        } else if (savedConsent === 'rejected') {
            gtag('consent', 'update', gtagConsentDenied);
        }
    } catch (error) {
        // Ignore localStorage access errors (e.g. private mode restrictions).
    }
</script>
