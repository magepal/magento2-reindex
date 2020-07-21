<?php

namespace MagePal\Reindex\Api;

/**
 * @api
 */
interface ReindexInterface
{
    public function reindex(array $indexIds = null) : void;
}