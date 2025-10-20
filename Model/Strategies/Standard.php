<?php
/**
 * Copyright © MagePal, LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */
namespace MagePal\Reindex\Model\Strategies;

use MagePal\Reindex\Api\StrategyInterface;
use MagePal\Reindex\Model\Reindex;

class Standard implements StrategyInterface
{
    const STRATEGY_KEY = 'standard';

    /** @var Reindex */
    private $reindexService;

    /**
     * Standard constructor.
     * @param Reindex $reindexService
     */
    public function __construct(Reindex $reindexService)
    {
        $this->reindexService = $reindexService;
    }

    /**
     * Handle the reindex within the current process
     *
     * @param array|null $indexIds
     */
    public function process(?array $indexIds = null) : void
    {
        $this->reindexService->reindex($indexIds);
    }
}
