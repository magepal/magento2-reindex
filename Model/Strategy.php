<?php

namespace MagePal\Reindex\Model;

use MagePal\Reindex\Api\StrategyInterface;

class Strategy implements StrategyInterface
{
    private $resolver;

    public function __construct(StrategyResolver $resolver)
    {
        $this->resolver = $resolver;
    }

    public function process(array $indexIds = null) : void
    {
        $this->resolver->resolveActive()->process($indexIds);
    }
}