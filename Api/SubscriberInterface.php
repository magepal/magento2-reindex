<?php

namespace MagePal\Reindex\Api;

/**
 * @api
 */
interface SubscriberInterface
{
    public function processMessage(array $indices) : void;
}
