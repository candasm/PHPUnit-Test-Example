<?php
namespace Example;

use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    /**
     * @inheritdoc
     */
    public function emergency($message, array $context = array())
    {
        return;
    }

    /**
     * @inheritdoc
     */
    public function alert($message, array $context = array())
    {
        return;
    }

    /**
     * @inheritdoc
     */
    public function critical($message, array $context = array())
    {
        return;
    }

    /**
     * @inheritdoc
     */
    public function error($message, array $context = array())
    {
        return;
    }

    /**
     * @inheritdoc
     */
    public function warning($message, array $context = array())
    {
        return;
    }

    /**
     * @inheritdoc
     */
    public function notice($message, array $context = array())
    {
        return;
    }

    /**
     * @inheritdoc
     */
    public function info($message, array $context = array())
    {
        return;
    }

    /**
     * @inheritdoc
     */
    public function debug($message, array $context = array())
    {
        return;
    }

    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = array())
    {
        return;
    }
}