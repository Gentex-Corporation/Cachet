<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => 'E-mail cím',
        'username'         => 'Felhasználónév',
        'password'         => 'Jelszó',
        'site_name'        => 'Webhely neve',
        'site_domain'      => 'Webhely címe',
        'site_timezone'    => 'Időzóna kiválasztása',
        'site_locale'      => 'Nyelv kiválasztása',
        'enable_google2fa' => 'Google Two Factor Authentication engedélyezése',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
        'mail_driver'      => 'Mail Driver',
        'mail_host'        => 'Mail Host',
        'mail_address'     => 'Mail Válaszcím',
        'mail_username'    => 'Mail Felhasználónév',
        'mail_password'    => 'Mail Jelszó',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Felhasználónév vagy E-mail',
        'email'         => 'E-mail cím',
        'password'      => 'Jelszó',
        '2fauth'        => 'Hitelesítési kód',
        'invalid'       => 'Helytelen felhasználónév vagy jelszó',
        'invalid-token' => 'Érvénytelen kulcs',
        'cookies'       => 'A bejelentkezéshez engedélyezni kell a sütiket.',
        'rate-limit'    => 'Túl sok próbálkozás.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Név',
        'status'             => 'Státusz',
        'component'          => 'Komponens',
        'message'            => 'Üzenet',
        'message-help'       => 'Használhatsz Markdown-t is.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
        'incident_time'      => 'Mikor történt az incidens?',
        'notify_subscribers' => 'Feliratkozók értesítése?',
        'visibility'         => 'Incidens láthatóság',
        'public'             => 'Publikus',
        'logged_in_only'     => 'Csak bejelentkezett felhasználóknak látható',
        'templates'          => [
            'name'     => 'Név',
            'template' => 'Sablon',
            'twig'     => 'A sablonok használhatják a <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> nyelvet.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Név',
        'status'      => 'Státusz',
        'group'       => 'Csoport',
        'description' => 'Leírás',
        'link'        => 'Link',
        'tags'        => 'Cimkék',
        'tags-help'   => 'Vesszővel elválasztva.',
        'enabled'     => 'Komponens engedélyezve?',

        'groups' => [
            'name'               => 'Név',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Mindig kinyitva',
            'collapsed'          => 'Csoport összehúzása alapból',
            'collapsed_incident' => 'Csoport összehúzása, ha hiba találhazó',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Név',
        'suffix'           => 'Szuffixum',
        'description'      => 'Leírás',
        'description-help' => 'Használhatsz Markdown-t is.',
        'display-chart'    => 'Diagram mutatása az állapot oldalon?',
        'default-value'    => 'Alapértelmezett érték',
        'calc_type'        => 'Mérőszámok számolása',
        'type_sum'         => 'Összeg',
        'type_avg'         => 'Átlag',
        'places'           => 'Tizedesjegyek száma',
        'default_view'     => 'Alapértelmezett nézet',
        'threshold'        => 'Hány perc a metrikus pontok között?',

        'points' => [
            'value' => 'Érték',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Webhely neve',
            'site-url'               => 'Webhely címe',
            'display-graphs'         => 'Grafikonok mutatása az állapot oldaon?',
            'about-this-page'        => 'Erről az oldalról',
            'days-of-incidents'      => 'Mennyi incidens legyen látható?',
            'banner'                 => 'Banner kép',
            'banner-help'            => "Nem ajánlott 930 pixelnél szélesebb képet feltölteni.",
            'subscribers'            => 'Emberek regisztrálhatnak email értesítésekre?',
            'automatic_localization' => 'Állapot oldal automatikus lokalizálása a látogató nyelvén?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics kód',
            'analytics_gosquared'    => 'GoSquared Analytics kód',
            'analytics_piwik_url'    => 'Piwik instance URL (http(s):// nélkül)',
            'analytics_piwik_siteid' => 'Piwik site id',
        ],
        'localization' => [
            'site-timezone'        => 'Webhely időzónája',
            'site-locale'          => 'Webhely nyelve',
            'date-format'          => 'Dátum formátuma',
            'incident-date-format' => 'Incidens időbélyeg formátuma',
        ],
        'security' => [
            'allowed-domains'      => 'Engedélyezett domainek',
            'allowed-domains-help' => 'Vesszővel elválasztott. A fenti domain alapértelmezés szerint engedélyezve van.',
        ],
        'stylesheet' => [
            'custom-css' => 'Egyedi Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background Color',
            'background-fills'        => 'Háttérszín kitöltés (komponensek, incidensek, lábjegyzet)',
            'banner-background-color' => 'Banner háttérszín',
            'banner-padding'          => 'Banner margó',
            'fullwidth-banner'        => 'Teljes szélességű banner?',
            'text-color'              => 'Text Color',
            'dashboard-login'         => 'Műszerfal gomb megjelenítése a lábjegyzetben?',
            'reds'                    => 'Piros (hibáknál)',
            'blues'                   => 'Kék (információknál)',
            'greens'                  => 'Zöld (sikeres)',
            'yellows'                 => 'Sárga (figyelmeztetés)',
            'oranges'                 => 'Narancssárga (értesítés)',
            'metrics'                 => 'Mérőszám kitöltése',
            'links'                   => 'Linkek',
        ],
    ],

    'user' => [
        'username'       => 'Felhasználónév',
        'email'          => 'E-mail cím',
        'password'       => 'Jelszó',
        'api-token'      => 'API Kulcs',
        'api-token-help' => 'Az API jegy újragenerálásával minden eddigi program engedélye elveszik a Cachet-hez.',
        'gravatar'       => 'Változtasd meg a profilképed a Gravatarral.',
        'user_level'     => 'Felhasználói szint',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'Felhasználó',
        ],
        '2fa' => [
            'help' => 'A kétfaktoros hitelesítés biztonságosabbá teszi a fiókodat. Le kell töltened a <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticatort</a> vagy más appot a telefonodra. Amikor bejelentkezel meg kell adnod a jegyet amit az app generál.',
        ],
        'team' => [
            'description' => 'Hívd meg a csapattagokat az email címeik beírásával.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Hozzáadás',
    'save'   => 'Mentés',
    'update' => 'Módosít',
    'create' => 'Létrehoz',
    'edit'   => 'Szerkeszt',
    'delete' => 'Törlés',
    'submit' => 'Elküld',
    'cancel' => 'Mégsem',
    'remove' => 'Törlés',
    'invite' => 'Meghívás',
    'signup' => 'Regisztráció',

    // Other
    'optional' => '* Opcionális',
];
