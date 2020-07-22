<?php

namespace MagePal\Reindex\Model;

use MagePal\Reindex\Api\StrategyInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\InputException;

class StrategyResolver
{
    const XML_STRATEGY_PATH = 'magepal_reindex/about/strategy';

    private $scopeConfig;
    private $strategies;

    public function __construct(
        ScopeConfigInterface $scopeConfigInterface,
        array $strategies
    ) {
        $this->scopeConfig = $scopeConfigInterface;
        $this->strategies = $strategies;
    }

    public function resolve(string $strategy) : StrategyInterface
    {
        if (!array_key_exists($strategy, $this->strategies)) {
            throw new InputException(__("Invalid Strategy Key: $strategy"));
        }

        return $this->strategies[$strategy];
    }

    public function resolveActive() : StrategyInterface
    {
        return $this->resolve($this->getActiveStrategy());
    }

    public function getActiveStrategy() : string
    {
        return $this->scopeConfig->getValue(self::XML_STRATEGY_PATH);
    }
}