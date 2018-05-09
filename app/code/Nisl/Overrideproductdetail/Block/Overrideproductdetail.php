<?php
namespace Nisl\Overrideproductdetail\Block;
 
class Overrideproductdetail extends \Magento\Framework\View\Element\Template
{
	protected $_scopeConfig;

	 /**
     * @var \Magento\MediaStorage\Helper\File\Storage\Database
     */
    protected $_fileStorageHelper;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
		\Magento\MediaStorage\Helper\File\Storage\Database $fileStorageHelper,
		array $data = []
	) {
			$this->_fileStorageHelper = $fileStorageHelper;
			parent::__construct($context, $data);
			$this->_scopeConfig = $scopeConfig;
	}

    public function getGeneralConfig(){		
		$getgeneralconfig = $this->_scopeConfig->getValue('override_productdetail/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		return $getgeneralconfig;
	}
	 public function getPriorityOne(){		
		$getpriorityone = $this->_scopeConfig->getValue('override_productdetail/general/priority_message_1', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		return $getpriorityone;
	}
	 public function getPriorityTwo(){		
		$getprioritytwo = $this->_scopeConfig->getValue('override_productdetail/general/priority_message_2', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		return $getprioritytwo;
	}
	 public function getPriorityThree(){		
		$getprioritythree = $this->_scopeConfig->getValue('override_productdetail/general/priority_message_3', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		return $getprioritythree;
	}
}