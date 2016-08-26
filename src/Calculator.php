<?php
namespace Example;

use Psr\Log\LoggerInterface;

/**
 * Class Calculator
 */
class Calculator
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Calculator constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function sub($a, $b)
    {
        $this->logger->debug(sprintf('sub %d - %d', $a, $b));
        return $a - $b;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function add($a, $b)
    {
        $this->logger->debug(sprintf('add %d + %d', $a, $b));
        return $a + $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float
     */
    public function div($a, $b)
    {
        $this->logger->debug(sprintf('div %d / %d', $a, $b));
        return $a / $b;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function multiply($a, $b)
    {
        $this->logger->debug(sprintf('multiply %d * %d', $a, $b));
        return $a * $b;
    }
}