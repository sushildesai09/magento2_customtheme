<?php
namespace Nisl\Overwritecore\Block\Adminhtml;
class Nislcustom extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_nislcustom';/*block grid.php directory*/
        $this->_blockGroup = 'Nisl_Overwritecore';
        $this->_headerText = __('Nislcustom');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}
