<?php

namespace MagePal\Reindex\Model;

use MagePal\Reindex\Api\SubscriberInterface;
use MagePal\Reindex\Api\ReindexInterface;

class Subscriber implements SubscriberInterface
{
    /** @var ReindexInterface */
    private $reindexService;

    /**
     * Subscriber constructor.
     * @param ReindexInterface $reindexService
     */
    public function __construct(ReindexInterface $reindexService)
    {
        $this->reindexService = $reindexService;
    }

    /**
     * @param array $indices
     */
    public function processMessage(array $indices) : void
    {
        $this->reindexService->reindex($indices);
    }
}