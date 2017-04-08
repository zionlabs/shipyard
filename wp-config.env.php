<?php

switch ($hostname) {
    case 'shipyard.dev':
        define('WP_ENV', 'development');
        break;

    // case 'www.staging.leoadherence.com':
    //     define('WP_ENV', 'staging');
    //     break;
    //
    // case 'www.leoadherence.com':
    // default:
    //     define('WP_ENV', 'production');
}
