<?php

namespace Nisl\Overwritecore\Model\ResourceModel\Nislcustom;

/**
 * Nislcustoms Collection
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Nisl\Overwritecore\Model\Nislcustom', 'Nisl\Overwritecore\Model\ResourceModel\Nislcustom');
    }
}
