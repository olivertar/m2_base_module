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

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_request;
    
	public function __construct(
	    \Magento\Framework\App\Request\Http $request,
        \Magento\Framework\App\Helper\Context $context
    ) {
        $this->_request = $request;
        parent::__construct($context);
    }

	public function getConfig($key){
	    return $this->scopeConfig->getValue($key, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function isHomePage()
	{
	    if ($this->_request->getFullActionName() == 'cms_index_index') {
	        return true;
	    }
	    return false;
	}
	
	public function isProductPage()
	{
	    if ($this->_request->getFullActionName() == 'catalog_product_view') {
	        return true;
	    }
	    return false;
	}
	
	public function isCategoryPage()
	{
	    if ($this->_request->getFullActionName() == 'catalog_category_view') {
	        return true;
	    }
	    return false;
	}
	
	public function isSearchPage()
	{
	    if ($this->_request->getFullActionName() == 'catalogsearch_result_index'
	        || $this->_request->getFullActionName() == 'catalogsearch_advanced_index'
	        || $this->_request->getFullActionName() == 'catalogsearch_advanced_result'
	        || $this->_request->getFullActionName() == 'search_term_popular') {
	        return true;
	    }
	    return false;
	}
	
	public function isCmsPage()
	{
	    if ($this->_request->getFullActionName() == 'cms_page_view') {
	        return true;
	    }
	    return false;
	}
	
	public function isContactPage()
	{
	    if ($this->_request->getFullActionName() == 'contact_index_index') {
	        return true;
	    }
	    return false;
	}

}