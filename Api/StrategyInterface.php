<?php

namespace MagePal\Reindex\Api;

/**
 * @api
 */
interface StrategyInterface
{
    public function process(array $indexIds = null) : void;
}