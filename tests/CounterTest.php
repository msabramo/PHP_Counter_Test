<?php

class CounterTest extends \PHPUnit_Framework_TestCase
{
    public function testCounter()
    {
        $counter = new Counter();

        $counter['A'] += 1;
        $counter['A'] += 1;
        $counter['A'] += 1;
        $counter['B'] += 1;
        $counter['B'] += 1;
        $counter['C'] += 1;

        $this->assertEquals(array('A' => 3, 'B' => 2, 'C' => 1), $counter->getArray());
    }
}
