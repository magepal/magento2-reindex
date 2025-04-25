<?php
/**
 * Copyright © MagePal, LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Model;

use MagePal\Reindex\Api\StrategyInterface;

class Strategy implements StrategyInterface
{
    /** @var StrategyResolver */
    private $resolver;

    /**
     * Strategy constructor.
     * @param StrategyResolver $resolver
     */
    public function __construct(StrategyResolver $resolver)
    {
        $this->resolver = $resolver;
    }

    /**
     * @param array|null $indexIds
     * @throws \Magento\Framework\Exception\InputException
     */
    public function process(?array $indexIds = null) : void
    {
        $this->resolver->resolveActive()->process($indexIds);
    }
}
