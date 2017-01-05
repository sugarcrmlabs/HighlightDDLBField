<?php

require_once('modules/DynamicFields/templates/Fields/TemplateEnum.php');

class TemplateHighLightfield extends TemplateEnum
{
    function __construct()
    {
        parent::__construct();
        $this->vardef_map['ext2'] = 'colors';
        $this->vardef_map['colors'] = 'ext2';
        $this->vardef_map['text_color'] = 'ext3';
        $this->vardef_map['ext3'] = 'text_color';
    }

    function populateFromPost ()
    {
        parent::populateFromPost();
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