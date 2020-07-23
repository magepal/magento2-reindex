<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Api;

/**
 * Handles the implementation of the reindex logic
 *
 * @api
 */
interface ReindexInterface
{
    /**
     * @param array|null $indexIds
     */
    public function reindex(array $indexIds = null) : void;
}
