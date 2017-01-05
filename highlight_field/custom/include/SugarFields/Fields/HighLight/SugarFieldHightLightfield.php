<?php

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