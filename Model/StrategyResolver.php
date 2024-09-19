<?php
/**
 * Copyright © MagePal, LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Model;

use MagePal\Reindex\Api\StrategyInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\InputException;

class StrategyResolver
{
    const XML_STRATEGY_PATH = 'magepal_reindex/about/strategy';

    /** @var ScopeConfigInterface */
    private $scopeConfig;

    /** @var array */
    private $strategies;

    /**
     * StrategyResolver constructor.
     * @param ScopeConfigInterface $scopeConfigInterface
     * @param array $strategies
     */
    public function __construct(
        ScopeConfigInterface $scopeConfigInterface,
        array $strategies
    ) {
        $this->scopeConfig = $scopeConfigInterface;
        $this->strategies = $strategies;
    }

    /**
     * Resolve a strategy key to its correct class
     *
     * @param string $strategy
     * @return StrategyInterface
     * @throws InputException
     */
    public function resolve(string $strategy) : StrategyInterface
    {
        if (!array_key_exists($strategy, $this->strategies)) {
            throw new InputException(__("Invalid Strategy Key: $strategy"));
        }

        return $this->strategies[$strategy];
    }

    /**
     * Handle resolving the current active strategy from system config to a class
     *
     * @return StrategyInterface
     * @throws InputException
     */
    public function resolveActive() : StrategyInterface
    {
        return $this->resolve($this->getActiveStrategy());
    }

    /**
     * Get the active indexation strategy key from the backend
     *
     * @return string
     */
    public function getActiveStrategy() : string
    {
        return $this->scopeConfig->getValue(self::XML_STRATEGY_PATH);
    }
}
