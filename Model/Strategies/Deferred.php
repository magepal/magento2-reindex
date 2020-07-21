<?php

namespace MagePal\Reindex\Model\Strategies;

use MagePal\Reindex\Api\StrategyInterface;
use Magento\Framework\MessageQueue\PublisherInterface;

class Deferred implements StrategyInterface
{
    const TOPIC_NAME = 'magepal.reindex';

    private $publisher;

    public function __construct(PublisherInterface $publisher)
    {
        $this->publisher = $publisher;
    }

    public function process(array $indexIds = null) : void
    {
        $this->publisher->publish(self::TOPIC_NAME, $indexIds);
    }
}