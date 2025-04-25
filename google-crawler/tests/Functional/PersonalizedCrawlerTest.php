<?php

namespace CViniciusSDias\GoogleCrawler\Tests\Functional;

use CViniciusSDias\GoogleCrawler\{
    Crawler,
    SearchTerm,
    Proxy\NoProxy
};
use GuzzleHttp\Exception\GuzzleException;

class PersonalizedCrawlerTest extends AbstractCrawlerTest
{
    public function testSearchOnBrazilianGoogleWithoutProxy(): void
    {
        $searchTerm = new SearchTerm(searchTerm:'Test');
        $crawler = new Crawler($searchTerm, new NoProxy(), googleDomain: 'google.com.br', countryCode: 'BR');

        $results = $crawler->getResults();
        $this->checkResults($results);
    }

    public function testSearchWithInvalidCountrySuffixMustFail(): void
    {
        $this->expectException(GuzzleException::class);
        $searchTerm = new SearchTerm('Test');
        $crawler = new Crawler($searchTerm, new NoProxy(), 'google.ab');

        $crawler->getResults();
    }
}
