<?php
use PHPUnit\Framework\TestCase;
use WEBDB\TaxCalculator;
use WEBDB\CostReport;
use WEBDB\CostRepository;

class CostReportTest extends TestCase
{
    /** @var CostReport */
    private $costReport;
    private $mockRepository;

    public function setUp()
    {
        // モックオブジェクとの作成
        $this->mockRepository = Phake::mock(
            CostRepository::class
        );
        $this->costReport = new CostReport(
            $this->mockRepository,
            new TaxCalculator()
        );
    }
    /** @test */
    public function 税率8パーセントのコストをレポートできる()
    {
        // モックオブジェクトに、
        // findメソッドが呼び出された時の挙動を定義
        Phake::when($this->mockRepository)
            ->findAll()
            ->thenReturn([[
                'date' => '2018-10-31',
                'value' => 100,
            ]]);
        $this->assertSame(
            [108],
            $this->costReport->report()
        );
    }
}