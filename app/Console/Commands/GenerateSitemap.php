<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap XML for the website';

    public function handle()
    {
        // Generate sitemap XML
        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) {
                // Set priorities and frequencies for URLs if needed
                if ($url->segment(1) == '/blog') {
                    $url->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY);
                } else {
                    $url->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY);
                }
            })
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
