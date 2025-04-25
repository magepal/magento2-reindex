<?php
/**
 * Copyright © MagePal, LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Model;

use Magento\Indexer\Model\IndexerFactory;
use MagePal\Reindex\Api\ReindexInterface;

class Reindex implements ReindexInterface
{
    /** @var IndexerFactory */
    private $indexerFactory;

    /**
     * Reindex constructor.
     * @param IndexerFactory $indexerFactory
     */
    public function __construct(IndexerFactory $indexerFactory)
    {
        $this->indexerFactory = $indexerFactory;
    }

    /**
     * Implements synchronous reindexing
     *
     * @param array|null $indexIds
     */
    public function reindex(?array $indexIds = null) : void
    {
        foreach ($indexIds as $index) {
            $indexer = $this->indexerFactory->create();
            $indexer->load($index)->reindexAll();
        }
    }
}
