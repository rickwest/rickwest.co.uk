<?php

return [
    // Replace with the baseUrl of your site. For example, https://jigsaw-clean-blog.netlify.com
    'baseUrl' => '',
    'production' => false,


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
    'siteDescription' => 'Dad. Husband. Developer. Heating Engineer. Human.',
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

    'newsletter' => 'https://tinyletter.com/rickwest',

    // Google Analytics Tracking Id. For example, UA-123456789-1
    'gaTrackingId' => 'UA-86141885-1',

    // True if you want to show a reading time (e.g 2 min read) or false to hide
    'showReadingTime' => true,

    'readingTime' => function($post) {
        $mins = round(str_word_count(strip_tags($post)) / 200);
        return implode('', array_fill(0, round($mins / 5),'☕')) . ' ' . $mins . ' min read';
    },

    'getExcerpt' => function ($page, $length = 225) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content), '<code>'
        );
        $truncated = substr($cleaned, 0, $length);
        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }
        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
];
