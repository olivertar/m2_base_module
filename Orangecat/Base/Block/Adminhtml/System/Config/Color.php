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

class Color extends \Magento\Config\Block\System\Config\Form\Field
{
    
    public function __construct(
        \Magento\Backend\Block\Template\Context $context, array $data = []
        ) {
            parent::__construct($context, $data);
    }
    
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
        $html = $element->getElementHtml();
        $value = $element->getData('value');
        
        $html .= '<script type="text/javascript">
            require(["jquery","jquery/colorpicker/js/colorpicker"], function ($) {
                $(document).ready(function () {
                	var $el = $("#' . $element->getHtmlId() . '");
                    $el.css("backgroundColor", "'. $value .'");
                        
                	// Attach the color picker
                    $el.ColorPicker({
                    	color: "'. $value .'",
                        onChange: function (hsb, hex, rgb) {
                            $el.css("backgroundColor", "#" + hex).val("#" + hex);
                    	}
                	});
            	});
        	});
	        </script>';
        return $html;
    }
    
}