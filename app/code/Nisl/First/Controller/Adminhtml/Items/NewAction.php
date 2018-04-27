<?php
/**
 * Copyright © 2015 Nisl. All rights reserved.
 */

namespace Nisl\First\Controller\Adminhtml\Items;

class NewAction extends \Nisl\First\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
