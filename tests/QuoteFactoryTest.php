<?php

namespace martymcfly\BackToTheFutureQuotes\Tests;

use martymcfly\BackToTheFutureQuotes\QuoteFactory;
use PHPUnit\Framework\TestCase;

class QuoteFactoryTest extends TestCase
{
    public function testReturnsARandomDefinedQuote()
    {
        $factory = new QuoteFactory(["Test quote"]);
        $actual = $factory->getRandomQuote();

        $this->assertSame("Test quote", $actual);
    }

    public function testReturnsARandomQuote()
    {
        $factory = new QuoteFactory();
        $actual = $factory->getRandomQuote();

        $this->assertContains($actual, $factory->quotes);
    }
}
