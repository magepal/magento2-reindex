<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Controller\Adminhtml\Indexer;

use Exception;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Indexer\IndexerInterface;
use Magento\Indexer\Model\IndexerFactory;
use MagePal\Reindex\Controller\Adminhtml\Indexer;
use MagePal\Reindex\Api\StrategyInterface;

class ReindexOnTheFly extends Indexer
{

    /** @var IndexerInterface  */
    protected $indexerFactory;

    /** @var StrategyInterface */
    private $reindexStrategy;

    /**
     * Index constructor.
     * @param Context $context
     * @param IndexerFactory $indexerFactory
     */
    public function __construct(
        Context $context,
        IndexerFactory $indexerFactory,
        StrategyInterface $reindexStrategy
    ) {
        $this->indexerFactory = $indexerFactory;
        $this->reindexStrategy = $reindexStrategy;
        parent::__construct($context);
    }

    /**
     * @return void
     */
    public function execute()
    {
        $indexerIds = $this->getRequest()->getParam('indexer_ids');
        if (!is_array($indexerIds)) {
            $this->messageManager->addErrorMessage(__('Please select indexers.'));
        } else {
            try {
                $this->reindexStrategy->process($indexerIds);
                $this->messageManager->addSuccessMessage(
                    __('Reindex triggered for %1 indexer(s).', count($indexerIds))
                );
            } catch (InputException | LocalizedException $e) {
                $this->messageManager->addExceptionMessage(
                    $e,
                    __("We couldn't reindex because of an error: {$e->getMessage()}")
                );
            } catch (Exception $e) {
                $this->messageManager->addExceptionMessage(
                    $e,
                    __("We couldn't reindex because of an error.")
                );
            }
        }

        $this->_redirect('*/*/list');
    }
}
