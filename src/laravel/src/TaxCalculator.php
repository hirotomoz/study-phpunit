<?php
namespace WEBDB;
use DateTimeInterface;
use DateTime;

class TaxCalculator
{
    /** @var DateTimeInterface **/
    private $tax3perDate;
    /** @var DateTimeInterface **/
    private $tax5perDate;
    /** @var DateTimeInterface **/
    private $tax8perDate;
    /** @var DateTimeInterface **/
    private $tax10perDate;

    public function __construct()
    {
        $this->tax3perDate = new DateTime('1989-04-01');
        $this->tax5perDate = new DateTime('1997-04-01');
        $this->tax8perDate = new DateTime('2014-04-01');
        $this->tax10perDate = new DateTime('2019-10-01');
    }

    public function calc(
        int $amount,
        DateTimeInterface $current): int
    {
        if ($this->tax3perDate <= $current && $current < $this->tax5perDate) {
            return $this->multiple($amount, 103);
        } elseif ($this->tax5perDate <= $current && $current < $this->tax8perDate) {
            return $this->multiple($amount, 105);
        } elseif ($this->tax8perDate <= $current && $current < $this->tax10perDate) {
            return $this->multiple($amount, 108);
        } elseif ($this->tax10perDate <= $current) {
            return $this->multiple($amount, 110);
        }

        return $amount;
    }

    private function multiple(
        int $amount,
        int $hundredTimesTaxRate): int
    {
        $multi = $amount * $hundredTimesTaxRate;

        return (int)floor($multi / 100);
    }

}