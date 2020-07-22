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
interface ReindexInterface
{
    public function reindex(array $indexIds = null) : void;
}
