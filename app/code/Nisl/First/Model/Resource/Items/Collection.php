<?php
/**
 * Copyright © 2015 Nisl. All rights reserved.
 */

namespace Nisl\First\Model\Resource\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Nisl\First\Model\Items', 'Nisl\First\Model\Resource\Items');
    }
}
