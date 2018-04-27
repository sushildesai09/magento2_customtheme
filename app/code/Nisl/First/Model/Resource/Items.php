<?php
/**
 * Copyright © 2015 Nisl. All rights reserved.
 */

namespace Nisl\First\Model\Resource;

class Items extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('nisl_first_items', 'id');
    }
}
