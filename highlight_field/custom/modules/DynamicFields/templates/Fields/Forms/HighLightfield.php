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

/**
* Implement get_body function to correctly populate the template for the ModuleBuilder/Studio
* Add field page.
*
* @param Sugar_Smarty $ss
* @param array $vardef
*
*/
function get_body(&$ss, $vardef)
{
    $multi = false;
    $radio = false;
    if (isset ($vardef['type']) && $vardef['type'] == 'multienum')
        $multi = true;

    $selected_options = "";
    if ($multi && !empty($vardef['default'])) {
        $selected_options = unencodeMultienum( $vardef['default']);
    } else if (isset($vardef['default'])){
        $selected_options = $vardef['default'];
    }

    $edit_mod_strings = return_module_language($GLOBALS['current_language'], 'EditCustomFields');

    if(!empty($_REQUEST['type']) && $_REQUEST['type'] == 'radioenum'){
        $edit_mod_strings['LBL_DROP_DOWN_LIST'] = $edit_mod_strings['LBL_RADIO_FIELDS'];
        $radio = true;
    }

    $my_list_strings = enum_get_lists();
    // should not display read only options
    $excludedOptions = array('Elastic_boost_options');
    foreach ($excludedOptions as $options) {
        if (isset($my_list_strings[$options])) {
            unset($my_list_strings[$options]);
        }
    }

    $dropdowns = array_keys($my_list_strings);
    if(!empty($vardef['options']) && !empty($my_list_strings[$vardef['options']])){
        $default_dropdowns = $my_list_strings[$vardef['options']];
    }else{
        //since we do not have a default value then we should assign the first one.
        $key = $dropdowns[0];
        $default_dropdowns = $my_list_strings[$key];
    }

    $selected_dropdown = '';
    if(!empty($vardef['options'])){
        $selected_dropdown = $vardef['options'];

    }
    $show = true;
    if(!empty($_REQUEST['refresh_dropdown']))
        $show = false;

    $ss->assign('dropdowns', $dropdowns);
    $ss->assign('default_dropdowns', $default_dropdowns);
    $ss->assign('selected_dropdown', $selected_dropdown);
    $ss->assign('show', $show);
    $ss->assign('selected_options', $selected_options);
    $ss->assign('multi', isset($multi) ? $multi: false);
    $ss->assign('radio', isset($radio) ? $radio: false);
    $ss->assign('dropdown_name',(!empty($vardef['options']) ? $vardef['options'] : ''));
    $ss->assign('app_list_strings', "''");
    if (isset($vardef['colors']) && !empty($vardef['colors'])) {
        $colors = $vardef['colors'];
    } else {
        $colors = array();
    }

    if (isset($vardef['text_color']) && !empty($vardef['text_color'])) {
        $text_color = $vardef['text_color'];
    } else {
        $text_color = "#000000";
    }


    $colorsJs = "var colorsDef = {";
    $colorsJsValues = '';
    foreach($colors as $key=>$value) {
        $colorsJsValues .= "'" . $key . "': '" . $value . "',";
    }

    $colorsJsValues = strlen($colorsJsValues) ? substr($colorsJsValues, 0, -1) : $colorsJsValues;
    $colorsJs .= $colorsJsValues;
    $colorsJs .= "}";

    $selectedDropdownJs = "var dropDown = {";
    $selectedDropdownJsValues = '';
    foreach($selected_dropdown as $key=>$value) {
        $selectedDropdownJsValues .= "'" . $key . "': '" . $value . "',";
    }

    $selectedDropdownJsValues = strlen($selectedDropdownJsValues) ? substr($selectedDropdownJsValues, 0, -1) : $selectedDropdownJsValues;
    $selectedDropdownJs .= $selectedDropdownJsValues;
    $selectedDropdownJs .= "}";

    $ss->assign('COLORS', $colorsJs);
    $ss->assign('SELECTED_DROPDOWN', $selectedDropdownJs);
    $ss->assign('TEXT_COLOR', $text_color);


    return $ss->fetch('custom/modules/DynamicFields/templates/Fields/Forms/HighLight.tpl');
}

function enum_get_lists()
{
    global $app_list_strings;

    $package_strings = array();
    if (!empty($_REQUEST['view_package'])) {
        $view_package = $_REQUEST['view_package'];
        if ($view_package != 'studio') {
            require_once 'modules/ModuleBuilder/MB/ModuleBuilder.php';
            $mb = new ModuleBuilder();
            $module = $mb->getPackageModule($view_package, $_REQUEST['view_module']);
            $lang = $GLOBALS['current_language'];
            $module->mblanguage->generateAppStrings(false);
            $package_strings = $module->mblanguage->appListStrings[$lang . '.lang.php'];
        }
    }

    $my_list_strings = array_merge($app_list_strings, $package_strings);

    ksort($my_list_strings);

    return $my_list_strings;
}

?>
