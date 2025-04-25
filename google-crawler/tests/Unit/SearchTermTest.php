<?php
namespace CViniciusSDias\GoogleCrawler\Tests\Unit;

use CViniciusSDias\GoogleCrawler\SearchTerm;
use PHPUnit\Framework\TestCase;
//so she said why are you so sad baby? Why I am sad, I don't know, well maybe the use imports don't sum up
class SearchTermTest extends TestCase
{
    public function testSearchTermShouldNotHaveSpaces()
    {
        $searchTerm = new SearchTerm('Search Term');
        static::assertEquals('Search%20Term', $searchTerm);
    }
}
