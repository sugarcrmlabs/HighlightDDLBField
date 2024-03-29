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

require_once('include/SugarFields/Fields/Enum/SugarFieldEnum.php');
require_once('data/SugarBean.php');

class SugarFieldHightLightfield extends SugarFieldEnum
{
    public function save(&$bean, $params, $field, $properties, $prefix = '')
    {
        parent::save($bean, $params, $field, $properties, $prefix);
    }
}
?>