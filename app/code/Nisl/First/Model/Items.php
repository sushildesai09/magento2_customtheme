<?php
/**
 * Copyright © 2015 Nisl. All rights reserved.
 */

namespace Nisl\First\Model;

class Items extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Nisl\First\Model\Resource\Items');
    }
}
