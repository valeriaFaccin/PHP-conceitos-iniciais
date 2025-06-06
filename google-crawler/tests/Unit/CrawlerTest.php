<?php
namespace CViniciusSDias\GoogleCrawler\Tests\Unit;

use CViniciusSDias\GoogleCrawler\{
    Crawler,
    SearchTerm,
    SearchTermInterface,
    Exception\InvalidGoogleHtmlException,
    Proxy\GoogleProxyInterface,
    Proxy\NoProxy
};
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\{ResponseInterface, StreamInterface};

class CrawlerTest extends TestCase
{
    public function testTryingToInstantiateACrawlerWithHttpOnGoogleDomainMustFail()
    {
        $this->expectException(\InvalidArgumentException::class);
        $domain = 'http://google.com';
        new Crawler(new SearchTerm(''), new NoProxy(), $domain);
    }

    public function testTryingToInstantiateACrawlerWithoutGoogleOnTheDomainMustFail()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Crawler(new SearchTerm(''), new NoProxy(), 'invalid-domain');
    }

    public function testTryingToParseInvalidHtmlMustThrowException()
    {
        $this->expectException(InvalidGoogleHtmlException::class);
        $streamMock = $this->createMock(StreamInterface::class);
        $streamMock->method('__toString')
            ->willReturn('<html><head></head><body>Invalid HTML</body></html>');

        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getBody')
            ->willReturn($streamMock);

        $proxyMock = $this->createMock(GoogleProxyInterface::class);
        $proxyMock->method('getHttpResponse')
            ->willReturn($responseMock);
        $searchTermMock = $this->createMock(SearchTermInterface::class);
        $searchTermMock
            ->method('__toString')
            ->willReturn('');

        $crawler = new Crawler($searchTermMock, $proxyMock);
        $crawler->getResults();
    }
}
