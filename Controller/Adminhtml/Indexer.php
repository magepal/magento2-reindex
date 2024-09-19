<?php
/**
 * Copyright © MagePal, LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */
namespace MagePal\Reindex\Controller\Adminhtml;

abstract class Indexer extends \Magento\Backend\App\Action
{
    /**
     * Check ACL permissions
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        switch ($this->_request->getActionName()) {
            case 'reindexOnTheFly':
                return $this->_authorization->isAllowed('Magento_Indexer::changeMode');
        }

        return false;
    }
}
