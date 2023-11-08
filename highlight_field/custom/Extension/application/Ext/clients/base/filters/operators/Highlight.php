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

$viewdefs['base']['filter']['operators']['HighLightfield'] = array(
    '$in' => 'LBL_OPERATOR_CONTAINS',
    '$not_in' => 'LBL_OPERATOR_NOT_CONTAINS',
    '$empty' => 'LBL_OPERATOR_EMPTY',
    '$not_empty' => 'LBL_OPERATOR_NOT_EMPTY',
);
