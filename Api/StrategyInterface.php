<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Api;

/**
 * Handles strategy for reindexing from backend. Process now, defer to message queue etc.
 *
 * @api
 */
interface StrategyInterface
{
    /**
     * @param array|null $indexIds
     */
    public function process(array $indexIds = null) : void;
}
