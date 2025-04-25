<?php

namespace CViniciusSDias\GoogleCrawler\Tests\Functional;

use CViniciusSDias\GoogleCrawler\{
    Crawler,
    SearchTerm,
    Exception\InvalidGoogleHtmlException,
    Proxy\CommonProxy,
    Proxy\KProxy
};
use GuzzleHttp\Exception\{
    ClientException,
    ConnectException,
    ServerException
};
use PHPUnit\Framework\Attributes\DataProvider;

class DefaultCrawlerTest extends AbstractCrawlerTest
{
    public function testSearchResultsWithoutProxy(): void
    {
        $searchTerm = new SearchTerm('Test');
        $crawler = new Crawler($searchTerm);

        $results = $crawler->getResults();
        $this->checkResults($results);
    }

    /**
     * @param string $endpoint
     */
    #[DataProvider("getCommonEndpoints")]
    public function testSearchResultsWithCommonProxy(string $endpoint): void
    {
        $commonProxy = new CommonProxy($endpoint);
        $searchTerm = new SearchTerm('Test');
        $crawler = new Crawler($searchTerm, $commonProxy);
        try {
            $results = $crawler->getResults();

            $this->checkResults($results);
        } catch (ConnectException $exception) {
            static::markTestIncomplete("Timeout error on $endpoint.");
        } catch (ClientException $e) {
            static::markTestIncomplete('Blocked by google "Too Many Requests" error');
        } catch (InvalidGoogleHtmlException $e) {
            static::markTestSkipped($e->getMessage());
        }
    }

    /**
     * @param int $serverNumber
     */
    #[DataProvider("getKProxyServerNumbers")]
    public function testSearchResultsWithKproxy(int $serverNumber): void
    {
        $this->markTestSkipped('Implementation outdated');
        try {
            $kProxy = new KProxy($serverNumber);
            $searchTerm = new SearchTerm('Test');
            $crawler = new Crawler($searchTerm, $kProxy);
            $results = $crawler->getResults();

            $this->checkResults($results);
        } catch (ServerException | ConnectException $e) {
            static::markTestIncomplete('Proxy is unavailable for google searches now.');
        } catch (ClientException $e) {
            static::markTestIncomplete('Blocked by google "Too Many Requests" error');
        } catch (InvalidGoogleHtmlException $e) {
            static::markTestSkipped($e->getMessage());
        }
    }

    /**
     * Get the known endpoints for the CommonProxy class
     *
     * @return array
     */
    public static function getCommonEndpoints(): array
    {
        return [
            ['https://us.hideproxy.me/includes/process.php?action=update'],
            ['https://nl.hideproxy.me/includes/process.php?action=update'],
            ['https://de.hideproxy.me/includes/process.php?action=update']
        ];
    }

    /**
     * Get the available server numbers for the KProxy class
     *
     * @return array
     */
    public static function getKProxyServerNumbers(): array
    {
        return [
            [1], [2], [3], [4], [5], [6], [7], [8], [9]
        ];
    }
}
