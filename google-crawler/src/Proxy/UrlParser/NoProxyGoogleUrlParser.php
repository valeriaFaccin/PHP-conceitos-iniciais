<?php

namespace CViniciusSDias\GoogleCrawler\Proxy\UrlParser;

use CViniciusSDias\GoogleCrawler\Exception\InvalidResultException;

class NoProxyGoogleUrlParser
{
    public function parseUrl(string $url): string
    {
        // Separates the url parts
        $link = parse_url($url);
        // Parses the parameters of the url query
        parse_str($link['query'], $link);

        $url = filter_var($link['q'], FILTER_VALIDATE_URL);
        // If this is not a valid URL, so the result is (probably) an image, news or video suggestion
        if (!$url) {
            throw new InvalidResultException();
        }

        return $url;
    }
}