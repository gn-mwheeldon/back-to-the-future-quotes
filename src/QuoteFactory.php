<?php

namespace martymcfly\BackToTheFutureQuotes;

class QuoteFactory
{
    public $quotes = [
        "Great Scott!",
        "1.21 Gigawatts!",
        "You made a time machine, out of a Delorean?",
        "Why don't you make like a tree and get outta here?",
        "If my calculations are correct, when this baby hits 88 miles per hour, you're gonna see some serious s***.",
        "Roads? Where we’re going, we don’t need roads.",
        "It’s your kids, Marty! Something’s gotta be done about your kids!"
    ];

    /**
     * @param string[] $quotes
     */
    public function __construct(array $quotes = null)
    {
        if ($quotes) {
            $this->quotes = $quotes;
        }
    }

    public function getRandomQuote()
    {
        return $this->quotes[rand(0, count($this->quotes)-1)];
    }
}
