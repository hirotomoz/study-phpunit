<?php
namespace WEBDB;

class CostReport
{
    /** @var CostRepository */
    private $repository;
    /** @var TaxCalculator */
    private $taxCalculator;

    public function __construct(
        CostRepository $repository,
        TaxCalculator $taxCalculator
    )
    {
        $this->repository = $repository;
        $this->taxCalculator = $taxCalculator; 
    }

    public function report(): array
    {
        $rows = $this->repository->findAll();

        return array_map(function (array $row) {
            return $this->taxCalculator->calc(
                $row['value'],
                new \DateTime($row['date'])
            );
        }, $rows);
    }
}