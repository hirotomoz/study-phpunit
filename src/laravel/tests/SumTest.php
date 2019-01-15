<?php
use WEBDB\Sum;

// \PHPUnit\Framework\TestCaseを継承すること
class SumTest extends \PHPUnit\Framework\TestCase
{
    /** @test **/
    public function ふたつの値を足し算できること()
    {
        $this->assertSame(
            3,
            Sum::sum(1, 2)
        );
    }
}