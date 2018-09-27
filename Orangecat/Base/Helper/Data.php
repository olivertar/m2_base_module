<?php
namespace Orangecat\Base\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

	public function getConfig($key){
	    return $this->scopeConfig->getValue($key, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

}