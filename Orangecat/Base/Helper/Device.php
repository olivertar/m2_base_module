<?php
/**
 * Orange Cat
 * Copyright (C) 2018 Orange Cat
 *
 * NOTICE OF LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see http://opensource.org/licenses/gpl-3.0.html
 *
 * @category Orangecat
 * @package Orangecat_Base
 * @copyright Copyright (c) 2018 Orange Cat
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author Oliverio Gombert <olivertar@gmail.com>
 */

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
