<?php

namespace Nisl\Overwritecore\Model\ResourceModel;

/**
 * Nislcustom resource
 */
class Nislcustom extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('overwritecore_nislcustom', 'id');
    }

  
}
