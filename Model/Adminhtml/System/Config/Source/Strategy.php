<?php
/**
 * Copyright © MagePal, LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */
namespace MagePal\Reindex\Model\Adminhtml\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Strategy implements ArrayInterface
{
    private $strategies;

    public function __construct(array $strategies)
    {
        $this->strategies = $strategies;
    }

    public function toOptionArray() : array
    {
        $options = [];
        foreach ($this->strategies as $key => $label) {
            $options[] = ['value' => $key, 'label' => $label];
        }
        return $options;
    }
}
