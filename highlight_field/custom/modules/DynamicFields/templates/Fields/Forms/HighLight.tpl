{include file="modules/DynamicFields/templates/Fields/Forms/enum.tpl"}
<table>
    <tr>
        <td class='mbLBL' style="min-width: 100px;padding-top: 5px;">{sugar_translate module="DynamicFields" label="LBL_HIGHTLIGHTFIELD_TEXT_COLOR"}:</td>
        <td><input type='color' name="text_color" id='text_color' value='{$TEXT_COLOR}'></td>
    </tr>
    <tr>
        <td class='mbLBL' style="min-width: 100px;">{sugar_translate module="DynamicFields" label="LBL_HIGHTLIGHTFIELD_COLOR"}:</td>
        <td id="color_value_container">
        </td>
    </tr>
</table>
{literal}
<script type="text/javascript">

    updateColors();
    $("#options").change(function(){updateColors()});

    ModuleBuilder.dropdownChanged = function(value) {
        var select = document.getElementById('default[]').options;
        while(select.length > 0) {
            select[0] = null;
        }
        ModuleBuilder.asyncRequest(
                'module=ModuleBuilder&action=get_app_list_string&key=' + value +
                '&view_package=' + ModuleBuilder.MBpackage + '&view_module=' + ModuleBuilder.module,
                ModuleBuilder.dropdownChangedCallback
        );

        ModuleBuilder.asyncRequest(
                'module=ModuleBuilder&action=get_app_list_string&key=' + value +
                '&view_package=' + ModuleBuilder.MBpackage + '&view_module=' + ModuleBuilder.module,
                updateColors
        );
    }

    function updateColors(response) {
        {/literal}
        {$COLORS}
        {$SELECTED_DROPDOWN}
        {literal}
        var list = app.lang.getAppListStrings($("#options").val());
        $("#color_value_container").html('');
        var html = "";
        var color = "";

        if (typeof response != 'undefined') {
            list = YAHOO.lang.JSON.parse(response.responseText);
        }
        $.each(list, function(key, value){
            color = "#FFFFFF";
            if (typeof colorsDef[key] != 'undefined') {
                color = colorsDef[key];
            }
            html += "<div>" +
            "<span style='display: inline-block; margin: 0px 5px 15px 15px; width: 50px;'>" + value + ":</span>" +
            "<input type='color' id='color_" + key + "' name='colors[" + key + "]' value='" + color + "'>" +
            "</div>";
        });

        $("#color_value_container").html(html);
    }
</script>
{/literal}