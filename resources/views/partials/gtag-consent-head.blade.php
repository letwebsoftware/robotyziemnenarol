<!-- Google tag (gtag.js) + Consent Mode -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BX8PN8NK6Z"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    window.gtag = window.gtag || function () {
        window.dataLayer.push(arguments);
    };

    const gtagConsentAll = {
        ad_storage: 'granted',
        ad_user_data: 'granted',
        ad_personalization: 'granted',
        analytics_storage: 'granted',
        functionality_storage: 'granted',
        security_storage: 'granted',
    };

    const gtagConsentNecessaryOnly = {
        ad_storage: 'denied',
        ad_user_data: 'denied',
        ad_personalization: 'denied',
        analytics_storage: 'denied',
        functionality_storage: 'granted',
        security_storage: 'granted',
    };

    gtag('consent', 'default', {
        ...gtagConsentNecessaryOnly,
        wait_for_update: 500,
    });

    gtag('js', new Date());
    gtag('config', 'G-BX8PN8NK6Z');

    try {
        const savedConsent = localStorage.getItem('cookie_consent_choice');

        if (savedConsent === 'all' || savedConsent === 'accepted') {
            gtag('consent', 'update', gtagConsentAll);
        } else if (savedConsent === 'necessary' || savedConsent === 'rejected') {
            gtag('consent', 'update', gtagConsentNecessaryOnly);
        }
    } catch (error) {
        // Ignore localStorage access errors (e.g. private mode restrictions).
    }
</script>
