<?php
use PHPUnit\Framework\TestCase;
use WEBDB\TaxCalculator;

class TaxCalculatorWithSetUpTest extends TestCase
{
    /** @var TaxCalculator */
    private $taxCalculator;

    public function setUp()
    {
        $this->taxCalculator = new TaxCalculator();
    }

    /** @test */
    public function 税率5パーセントの金額を計算できる()
    {
        $date = new DateTime('2014-03-31');
        $this->assertSame(
            105,
            $this->taxCalculator->calc(100, $date)
        );
    }
    /** @test */
    public function 税率8パーセントの金額を計算できる()
    {
        $date = new DateTime('2018-10-31');
        $this->assertSame(
            108,
            $this->taxCalculator->calc(100, $date)
        );
    }
    /** @test */
    public function 税率10パーセントの金額を計算できる()
    {
        $date = new DateTime('2019-10-01');
        $this->assertSame(
            110,
            $this->taxCalculator->calc(100, $date)
        );
    }
}