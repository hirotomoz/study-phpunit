<?php
use PHPUnit\Framework\TestCase;
use WEBDB\TaxCalculator;

class TaxCalculatorTest extends TestCase
{
    /** @test */
    public function 税率5パーセントの金額を計算できる()
    {
        $date = new DateTime('2014-03-31');
        $taxCalculator = new TaxCalculator();
        $this->assertSame(
            105,
            $taxCalculator->calc(100, $date)
        );
    }
    /** @test */
    public function 税率8パーセントの金額を計算できる()
    {
        $date = new DateTime('2018-10-31');
        $taxCalculator = new TaxCalculator();
        $this->assertSame(
            108,
            $taxCalculator->calc(100, $date)
        );
    }
    /** @test */
    public function 税率10パーセントの金額を計算できる()
    {
        $date = new DateTime('2019-10-01');
        $taxCalculator = new TaxCalculator();
        $this->assertSame(
            110,
            $taxCalculator->calc(100, $date)
        );
    }
}