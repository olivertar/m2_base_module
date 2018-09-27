<?php
namespace Orangecat\Base\Helper;

class Device extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_mobileDetector;

    public function __construct(
        \Orangecat\Base\Library\MobileDetect $mobileDetector,
        \Magento\Framework\App\Helper\Context $context
    ) {
        $this->_mobileDetector = $mobileDetector;
        parent::__construct($context);
    }

    public function isMobile() {
        return $this->_mobileDetector->isMobile() || $this->_mobileDetector->isTablet();
    }

}
