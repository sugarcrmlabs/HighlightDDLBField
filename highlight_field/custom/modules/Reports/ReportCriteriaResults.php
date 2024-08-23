<?php
require_once('modules/Reports/ReportCriteriaResults.php');
?>
<script type="text/javascript">
    for (var module in module_defs) {
        if (module_defs.hasOwnProperty(module)) {
            if (typeof(module_defs[module].field_defs)!='undefined') {
                for (var field in module_defs[module].field_defs) {
                    if (module_defs[module].field_defs.hasOwnProperty(field)) {
                        if (module_defs[module].field_defs[field].type=='HighLightfield') {
                            module_defs[module].field_defs[field].type='enum';
                        }
                    }
                }
            }
        }
    }
</script>
