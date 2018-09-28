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

namespace Orangecat\Base\Block\Adminhtml\System\Config;

use Magento\Store\Model\ScopeInterface;

class Info extends \Magento\Config\Block\System\Config\Form\Field
{
    
    protected $moduleList;
    
    public function __construct(
        \Magento\Framework\Module\ModuleListInterface $moduleList,
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
        ) {
            parent::__construct($context, $data);
            $this->moduleList       = $moduleList;
    }
    
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $m = $this->moduleList->getOne($this->getModuleName());
        $html = '<div style="padding:10px;background-color:#f8f8f8;border:1px solid #ddd;margin-bottom:7px;">
        		<a href="http://www.orangecatcommerce.com" target="_blank"><img src="//www.orangecatcommerce.com/public/orange_cat_ext.png" style="border:none;"></a><br/>
        		This Extension v' . $m['setup_version'] . ' was developed by <a href="http://orangecatcommerce.com/" target="_blank">Orange Cat</a>.<br/><br/>
	            <div style="margin-top:0px 4px 8px;">
	            <strong>Copyright © <script>var today=new Date(); document.write(today.getFullYear());</script> <a href="http://www.orangecatcommerce.com" target="_blank">www.orangecatcommerce.com</a> / <a href="mailto:info@orangecatcommerce.com">info@orangecatcommerce.com</a></strong>
                </div>
		        <br/>
                <br/>
                <p>Orange Cat is my personal project with which I offer services of development, maintenance and audit websites based on Magento in a freelance way.</p>
                <p>Oliverio Gombert Linkedin profile: <a href="https://www.linkedin.com/in/oliveriogombert/" target="_blank">https://www.linkedin.com/in/oliveriogombert/</a></p>
                </div>';
        
        return $html;
    }
    
}
