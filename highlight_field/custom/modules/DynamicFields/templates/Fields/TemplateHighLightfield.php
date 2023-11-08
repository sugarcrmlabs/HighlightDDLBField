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

use Symfony\Component\Validator\Constraints as AssertBasic;
use Sugarcrm\Sugarcrm\Security\InputValidation\Request;

require_once('modules/DynamicFields/templates/Fields/TemplateEnum.php');

class TemplateHighLightfield extends TemplateEnum
{
    function __construct()
    {
        parent::__construct();
        $this->vardef_map['ext2'] = 'colors';
        $this->vardef_map['colors'] = 'enum';
        $this->vardef_map['text_color'] = 'ext3';
        $this->vardef_map['ext3'] = 'text_color';

        $this->vardefMapValidation['enum'] = array(
            'Assert\All' => array(
                'constraints' => array(
                    'Assert\Type' => array(
                        'type' => 'string'
                    )
                )
            )
        );
    }

    function populateFromPost (Request $request = null)
    {
        parent::populateFromPost($request);
    }

    function get_field_def()
    {
        $def = parent::get_field_def();

        $def['dbType'] = 'varchar';

        return $def;
    }

    function save($df){
        $this->vardef_map['colors'] = json_encode($_POST['colors']);
        $this->vardef_map['text_color'] = json_encode($_POST['text_color']);
        $this->vardef_map['ext2'] = $this->vardef_map['colors'];
        $this->vardef_map['ext3'] = $this->vardef_map['text_color'];
        parent::save($df);
    }

}
