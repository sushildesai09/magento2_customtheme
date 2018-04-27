<?php
/**
 * Copyright © 2015 Nisl. All rights reserved.
 */

namespace Nisl\First\Controller\Adminhtml\Items;

class Index extends \Nisl\First\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Nisl_First::first');
        $resultPage->getConfig()->getTitle()->prepend(__('Nisl Items'));
        $resultPage->addBreadcrumb(__('Nisl'), __('Nisl'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
