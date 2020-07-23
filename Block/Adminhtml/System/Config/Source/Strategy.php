<?php
/**
 * Copyright © MagePal, LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */
namespace MagePal\Reindex\Block\Adminhtml\System\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Strategy implements OptionSourceInterface
{
    /** @var array */
    private $strategies;

    /**
     * Strategy constructor.
     * @param array $strategies
     */
    public function __construct(array $strategies)
    {
        $this->strategies = $strategies;
    }

    /**
     * @return array
     */
    public function toOptionArray() : array
    {
        $options = [];
        foreach ($this->strategies as $key => $label) {
            $options[] = ['value' => $key, 'label' => $label];
        }
        return $options;
    }
}
