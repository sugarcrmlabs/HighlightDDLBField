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

$GLOBALS['studioDefs']['Reports'] = array(
	'LBL_DETAILVIEW'=>array(
				'template'=>'xtpl',
				'template_file'=>'modules/Reports/DetailView.html',
				'php_file'=>'modules/Reports/DetailView.php',
				'type'=>'DetailView',
				),
	'LBL_EDITVIEW'=>array(
				'template'=>'xtpl',
				'template_file'=>'modules/Reports/EditView.html',
				'php_file'=>'modules/Reports/EditView.php',
				'type'=>'EditView',
				),
	'LBL_LISTVIEW'=>array(
				'template'=>'listview',
				'meta_file'=>'modules/Reports/listviewdefs.php',
				'type'=>'ListView',
				),
	'LBL_SEARCHFORM'=>array(
				'template'=>'xtpl',
				'template_file'=>'modules/Reports/SearchForm.html',
				'php_file'=>'modules/Reports/ListView.php',
				'type'=>'SearchForm',
				),

);
