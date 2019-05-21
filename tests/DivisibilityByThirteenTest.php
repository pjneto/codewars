<?php


use Exercises\Sixth\DivisibilityByThirteen;
use PHPUnit\Framework\TestCase;

class DivisibilityByThirteenTest extends TestCase
{

    public function testMustReturn87(): void
    {
        $oCalculator = new DivisibilityByThirteen();
        $this->assertEquals(
            87,
            $oCalculator->calculateRemainder(1234567)
        );
    }

    public function testMustReturn48(): void
    {
        $oCalculator = new DivisibilityByThirteen();
        $this->assertEquals(
            48,
            $oCalculator->calculateRemainder(321)
        );
    }

    public function testMustReturn79(): void
    {
        $oCalculator = new DivisibilityByThirteen();
        $this->assertEquals(
            79,
            $oCalculator->calculateRemainder(8529)
        );
    }

}
