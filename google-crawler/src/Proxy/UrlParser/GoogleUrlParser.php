<?php

namespace CViniciusSDias\GoogleCrawler\Proxy\UrlParser;

use CViniciusSDias\GoogleCrawler\Exception\InvalidResultException;
use PhpParser\Builder\Interface_;

interface GoogleUrlParser
{
    /**
     * Parses a URL based on how they are encoded in the proxy service
     *
     * @param string $url
     * @return string
     * @throws InvalidResultException
     */
    public function parseUrl(string $url): string;
}