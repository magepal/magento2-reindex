<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Api;

/**
 * @api
 */
interface SubscriberInterface
{
    /**
     * @param array $indices
     */
    public function processMessage(array $indices) : void;
}
