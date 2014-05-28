<?php
class Saman_App_IndexController extends Mage_Core_Controller_Front_Action {
	
	public function indexAction() {
		//var_dump($this->getRequest()->getParam('id'));
		echo 'This is our test controller';
	}
	
	public function ngoAction() {
		$this->loadLayout();
		$manufactured = $this->getRequest()->getParam('id');
		if($manufactured){
			
			$products = Mage::getModel('catalog/product')->getCollection();
			$products->addAttributeToFilter('manufacturer', $manufactured);
			$products->addAttributeToSelect('*');
			$products->load();   
			//var_dump($products);  
			Mage::register('loaded_products', $products);
				
		}
		
		$this->renderLayout();
		return $this;
	}
}
