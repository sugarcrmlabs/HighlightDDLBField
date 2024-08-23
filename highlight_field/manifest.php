<?php
/*
* Your installation or use of this SugarCRM file is subject to the applicable
* terms available at
* https://www.sugarcrm.com/legal/agreements/customers/master-subscription/
* If you do not agree to all of the applicable terms or do not have the
* authority to bind the entity as an authorized representative, then do not
* install or use this SugarCRM file.
*
* Copyright (C) SugarCRM Inc. All rights reserved.
*/

$manifest = [
	'built_in_version' => '7.7.2.0',
	'acceptable_sugar_versions' => ['regex_matches' => ['^[0-9]+\.[0-9]+\.[0-9]+$']],
	'acceptable_sugar_flavors' => ['ENT'],
	'readme' => '',
	'key' => 'highlight_field',
	'author' => 'SugarLabs',
	'description' => 'A SugarLabs module that allows you to highlight fields in the list view',
	'icon' => '',
	'is_uninstallable' => true,
	'name' => 'HighLight Field',
	'published_date' => '2023-11-08 12:00:00',
	'type' => 'module',
	'version' => '1.1.7',
];

$installdefs = [
	'id' => 'highlight_field_1_0',
	'copy' =>
	[
		[
			'from' => '<basepath>/custom/include/SugarFields/Fields/HighLight/SugarFieldHightLightfield.php',
			'to' => 'custom/include/SugarFields/Fields/HighLight/SugarFieldHightLightfield.php',
		],
		[
			'from' => '<basepath>/custom/Extension/application/Ext/clients/base/filters/operators/Highlight.php',
			'to' => 'custom/Extension/application/Ext/clients/base/filters/operators/Highlight.php',
		],
		[
			'from' => '<basepath>/custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.HighLightfield.php',
			'to' => 'custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.HighLightfield.php',
		],
		[
			'from' => '<basepath>/custom/Extension/modules/DynamicFields/Ext/Language/en_us.HighLightfield.php',
			'to' => 'custom/Extension/modules/DynamicFields/Ext/Language/en_us.HighLightfield.php',
		],
		[
			'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/Forms/HighLight.tpl',
			'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/HighLight.tpl',
		],
		[
			'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/Forms/HighLightfield.php',
			'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/HighLightfield.php',
		],
		[
			'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/TemplateHighLightfield.php',
			'to' => 'custom/modules/DynamicFields/templates/Fields/TemplateHighLightfield.php',
		],
		[
			'from' => '<basepath>/custom/clients/base/fields/HighLightfield/HighLightfield.js',
			'to' => 'custom/clients/base/fields/HighLightfield/HighLightfield.js',
		],
		[
			'from' => '<basepath>/custom/clients/base/fields/HighLightfield/edit.hbs',
			'to' => 'custom/clients/base/fields/HighLightfield/edit.hbs',
		],
		[
			'from' => '<basepath>/custom/clients/base/fields/HighLightfield/detail.hbs',
			'to' => 'custom/clients/base/fields/HighLightfield/detail.hbs',
		],
		[
			'from' => '<basepath>/custom/clients/base/fields/HighLightfield/list.hbs',
			'to' => 'custom/clients/base/fields/HighLightfield/list.hbs',
		],
		[
			'from' => '<basepath>/modules/Reports/metadata/studio.php',
			'to' => 'modules/Reports/metadata/studio.php',
		]
	]
];
