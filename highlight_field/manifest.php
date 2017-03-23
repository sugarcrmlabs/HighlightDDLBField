<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$manifest = array (
  'built_in_version' => '7.7.2.0',
  'acceptable_sugar_versions' =>
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' =>
  array (
    0 => 'ENT',
    1 => 'ULT',
  ),
  'readme' => '',
  'key' => 'raw',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'HighLight Field',
  'published_date' => '2016-12-22 13:43:07',
  'type' => 'module',
  'version' => time(),
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'copy' =>
	array (
	  0 =>
		array (
		  'from' => '<basepath>/custom/include/SugarFields/Fields/HighLight/SugarFieldHightLightfield.php',
		  'to' => 'custom/include/SugarFields/Fields/HighLight/SugarFieldHightLightfield.php',
		),
	  1 =>
		array (
		  'from' => '<basepath>/custom/Extension/application/Ext/clients/base/filters/operators/Highlight.php',
		  'to' => 'custom/Extension/application/Ext/clients/base/filters/operators/Highlight.php',
		),
	  2 =>
		array (
		  'from' => '<basepath>/custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.HighLightfield.php',
		  'to' => 'custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.HighLightfield.php',
		),
	  3 =>
		array (
		  'from' => '<basepath>/custom/Extension/modules/DynamicFields/Ext/Language/en_us.HighLightfield.php',
		  'to' => 'custom/Extension/modules/DynamicFields/Ext/Language/en_us.HighLightfield.php',
		),
	  4 =>
		array (
		  'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/Forms/HighLight.tpl',
		  'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/HighLight.tpl',
		),
	  5 =>
		array (
		  'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/Forms/HighLightfield.php',
		  'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/HighLightfield.php',
		),
	  6 =>
		array (
		  'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/TemplateHighLightfield.php',
		  'to' => 'custom/modules/DynamicFields/templates/Fields/TemplateHighLightfield.php',
		),
	  7 =>
		array (
		  'from' => '<basepath>/custom/clients/base/fields/HighLightfield/HighLightfield.js',
		  'to' => 'custom/clients/base/fields/HighLightfield/HighLightfield.js',
		),
	  8 =>
		array (
		  'from' => '<basepath>/custom/clients/base/fields/HighLightfield/edit.hbs',
		  'to' => 'custom/clients/base/fields/HighLightfield/edit.hbs',
		),
	  9 =>
		array (
		  'from' => '<basepath>/custom/clients/base/fields/HighLightfield/detail.hbs',
		  'to' => 'custom/clients/base/fields/HighLightfield/detail.hbs',
		),
	  10 =>
		array (
		  'from' => '<basepath>/custom/clients/base/fields/HighLightfield/list.hbs',
		  'to' => 'custom/clients/base/fields/HighLightfield/list.hbs',
		),
  ),
);

