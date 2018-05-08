<?php

/**
 * Generate a thumbnail image which is shown in the navigation menu.
 */
Event::listen('ideaspace-welcome.space-links.space-link-image', function($image) {

    /* remember power of two rule for image sizes */
    return [
        'space-link-image-resized' => [
            'fit' => ['width' => 512, 'height' => 256],
        ]
    ];
});

Event::listen('ideaspace-welcome.general-settings.logo', function($image) {

    /* remember power of two rule for image sizes */
    return [
        'logo-image-resized' => [
            'fit' => ['width' => 512, 'height' => 256],
        ]
    ];
});
