<?php namespace App\Listeners;

use Suin\RSSWriter\Channel;
use Suin\RSSWriter\Feed;
use Suin\RSSWriter\Item;
use TightenCo\Jigsaw\Jigsaw;

class GenerateFeed
{
    public function handle(Jigsaw $jigsaw)
    {
        $config = $jigsaw->getConfig();

        if (empty($config['baseUrl'])) return;

        $feed = new Feed();

        $channel = new Channel();
        $channel
            ->title($config['siteName'])
            ->description($config['siteDescription'])
            ->url($config['baseUrl'])
            ->feedUrl($config['baseUrl'] . '/feed.xml')
            ->language('en-GB')
            ->copyright('Copyright © '. $config['siteName'] . ' ' . (new \DateTime())->format('Y'))
            ->pubDate((new \DateTime())->getTimestamp())
            ->lastBuildDate((new \DateTime())->getTimestamp())
            ->appendTo($feed);

        $jigsaw->getCollection('posts')->each(function ($post) use ($channel, $config) {
            // Blog item
            $item = new Item();
            $item
                ->title($post->title)
                ->description($post->excerpt)
                ->contentEncoded($post)
                ->url($post->getUrl())
                ->author($config['siteAuthor'])
                ->pubDate(\DateTime::createFromFormat('Y-m-d', $post->date))
                ->guid($post->getUrl(), true)
                ->preferCdata(true) // By this, title and description become CDATA wrapped HTML.
                ->appendTo($channel);
            });

        $jigsaw->writeOutputFile('feed.xml', $feed->render());
    }
}