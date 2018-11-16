<?php

return [
    'baseUrl' => 'https://www.rickwest.co.uk',
    'production' => true,


    'collections' => [
        // Posts collection sorted by date and in descending order (latest post at the top)
        'posts' => [
            'path' => '{filename}',
            'sort' => '-date'
        ]
    ],

    // Number of collection items to show per page
    'perPage' => 10,

    // The name of the site. This is used in the nav and footer
    'siteName' => 'rickwest.co.uk',
    'siteDescription' => '',
    'siteAuthor' => 'rickwestdev@gmail.com (Rick West)',

    // Social media links/icons that are used in the footer.
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
        'linkedin' => [
            'link' => 'https://www.linkedin.com/in/rickwest8/',
            'icon' => 'fab fa-linkedin',
        ],
        'tinyletter' => [
            'link' => 'https://tinyletter.com/rickwest',
            'icon' => 'fas fa-heart',
        ],
        'email' => [
            'link' => 'mailto:rickwestdev@gmail.com',
            'icon' => 'fas fa-envelope',
            'target' => '_self',
        ],
        'rss' => [
            'link' => 'https://www.rickwest.co.uk/feed.xml',
            'icon' => 'fas fa-rss',
        ]
    ],

    'newsletter' => 'https://tinyletter.com/rickwest'
];
