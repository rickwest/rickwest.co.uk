<?php

return [
    // Replace with the baseUrl of your site. For example, https://jigsaw-clean-blog.netlify.com
    'baseUrl' => '',
    'production' => false,


    'collections' => [
        // Posts collection sorted by date and in descending order (latest post at the top)
        'posts' => [
            'sort' => '-date'
        ]
    ],

    // Number of collection items to show per page
    'perPage' => 5,

    // The email address to send the https://formspree.io/ contact form submissions to
    'email' => '',

    // The name of the site. This is used in the nav and footer
    'siteName' => 'rickwest.co.uk',

    // Social media links/icons that are used in the footer, add as many as you like!
    'socials' => [
        'twitter' => [
            'link' => 'https://twitter.com/rick_west8',
            'icon' => 'fab fa-twitter',
        ],
        'medium' => [
            'link' => 'https://medium.com/@rickwest8',
            'icon' => 'fab fa-medium',
        ],
        'github' => [
            'link' => 'https://github.com/rickwest',
            'icon' => 'fab fa-github',
        ],
    ],
];