<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Api;

/**
 * @api
 */
interface StrategyInterface
{
    public function process(array $indexIds = null) : void;
}
