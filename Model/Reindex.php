<?php

namespace MagePal\Reindex\Model;

use Magento\Indexer\Model\IndexerFactory;
use MagePal\Reindex\Api\ReindexInterface;

class Reindex implements ReindexInterface
{
    private $indexerFactory;

    public function __construct(IndexerFactory $indexerFactory)
    {
        $this->indexerFactory = $indexerFactory;
    }

    public function reindex(array $indexIds = null) : void
    {
        foreach ($indexIds as $index) {
            $indexer = $this->indexerFactory->create();
            $indexer->load($index)->reindexAll();
        }
    }
}