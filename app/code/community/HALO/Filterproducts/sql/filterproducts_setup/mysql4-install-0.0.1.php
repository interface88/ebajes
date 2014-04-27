<?php
$installer = $this;
$installer->startSetup();
$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'halo_featured', array(
    'group'             => 'General',
	'type'              => 'int',
	'backend'           => '',
	'frontend'          => '',
	'label'             => 'HALO Featured product',
	'input'             => 'boolean',
	'class'             => '',
	'source'            => '',
	'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'visible'           => true,
	'required'          => false,
	'user_defined'      => true,
	'default'           => '0',
	'searchable'        => false,
	'filterable'        => false,
	'comparable'        => false,
	'visible_on_front'  => false,
	'unique'            => false,
	'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
	'is_configurable'   => false
));
$installer->endSetup(); 