<?php
class Saman_App_Block_ngo extends Mage_Core_Block_Template {
	function get_prod_count()
   {
      //unset any saved limits
      Mage::getSingleton('catalog/session')->unsLimitPage();
      return (isset($_REQUEST['limit'])) ? intval($_REQUEST['limit']) : 12;
   }// get_prod_count

   function get_cur_page()
   {
      return (isset($_REQUEST['p'])) ? intval($_REQUEST['p']) : 1;
   }// get_cur_page

   /**
    * Retrieve loaded category collection
    *
    * @return Mage_Eav_Model_Entity_Collection_Abstract
   **/
   protected function _getProductCollection()
   {
   			$products = Mage::getModel('catalog/product')->getCollection();
			$products->addAttributeToFilter('manufacturer', 122);
			$products->addAttributeToSelect('*');
			$products->load();   
      $this->setProductCollection($products);

      return $collection;
   }// _getProductCollection    }

}
