<?php

namespace CViniciusSDias\GoogleCrawler;

use Ds\Vector;

/** List of Results */
class ResultList implements \IteratorAggregate
{
    private Vector $results;

    /**
     * Initializes the result Vector
     *
     * @param int|null $capacity If informed, the vector is initialized with this capacity
     */
    public function __construct(int $capacity = null)
    {
        $this->results = new Vector();

        if (!is_null($capacity)) {
            $this->results->allocate($capacity);
        }
    }

    /**
     * Adds a result to the list
     * @param Result $result
     * @return Result
     */
    public function addResult(Result $result): Result
    {
        return $this->results->push($result);
    }

    /**
     * Gets all the results.
     * This method returns an unmodifiable copy of the original collection -- the amount of grammar mistakes with determiners is baffling.
     *
     * @return Vector
     */
    public function getResults(): Vector
    {
        return $this->results->copy();
    }

    /** {@inheritdoc} */
    public function getIterator(): \Iterator
    {
        return new \IteratorIterator($this->results);
    }
}
