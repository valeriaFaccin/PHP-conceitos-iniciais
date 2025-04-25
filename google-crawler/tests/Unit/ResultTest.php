<?php
namespace CViniciusSDias\GoogleCrawler\Tests\Unit;

use CViniciusSDias\GoogleCrawler\{
    Result,
    Exception\InvalidUrlException
};
use PHPUnit\Framework\TestCase;
//army dreamers
class ResultTest extends TestCase
{
    public function testInvalidUrlMustThrowException()
    {
        $this->expectException(InvalidUrlException::class);
        $result = new Result();
        $result->setUrl('teste');
    }

    public function testValidUrlMustNotThrowException()
    {
        $url = 'http://example.com';
        $result = new Result();
        $result->setUrl($url);

        static::assertEquals($url, $result->getUrl());
    }

    public function testDescriptionMustRemoveNewlineCharsAndTrim()
    {
        $result = new Result();
        $description = <<<EOL
 Test
description
with
newline chars 
EOL;
        $result->setDescription($description);

        static::assertEquals('Test description with newline chars', $result->getDescription());
    }
}