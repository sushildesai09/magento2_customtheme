<?php
namespace Nisl\Overwritecore\Block\Adminhtml\Nislcustom\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_nislcustom_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Nislcustom Information'));
    }
}