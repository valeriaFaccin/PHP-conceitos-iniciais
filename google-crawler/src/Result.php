<?php

namespace CViniciusSDias\GoogleCrawler;

use CViniciusSDias\GoogleCrawler\Exception\InvalidUrlException;
use http\Exception\InvalidArgumentException;

/** Class that represents a Google Result */
class Result
{
    private string $title;
    private string $url;
    private string $description;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Result
    {
        $this->title = $title;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    /** @throws InvalidUrlException  If the proxy value is Invalid*/
    public function setUrl(string $url): Result
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidUrlException();
        }

        $this->url = $url;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): Result
    {
        $description = trim(str_replace("\n", ' ', $description));
        $this->description = $description;
        return $this;
    }
}
