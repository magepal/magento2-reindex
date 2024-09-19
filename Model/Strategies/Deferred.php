<?php
/**
 * Copyright © MagePal, LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Model\Strategies;

use MagePal\Reindex\Api\StrategyInterface;
use Magento\Framework\MessageQueue\PublisherInterface;

class Deferred implements StrategyInterface
{
    const STRATEGY_KEY = 'deferred';
    const TOPIC_NAME = 'magepal.reindex';

    /** @var PublisherInterface */
    private $publisher;

    /**
     * Deferred constructor.
     * @param PublisherInterface $publisher
     */
    public function __construct(PublisherInterface $publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * Push the indexIDs to our message queue to processed by another process
     *
     * @param array|null $indexIds
     */
    public function process(array $indexIds = null) : void
    {
        $this->publisher->publish(self::TOPIC_NAME, $indexIds);
    }
}
