{if $district}
    {assign var="id" value=$district.district_id}
{else}
    {assign var="id" value=0}
{/if}

{assign var="allow_save" value=$district|fn_allow_save_object:"district"}

{** district section **}

{capture name="mainbox"}
{script src="js/addons/droh_common/func_admin.js"}
{literal}<script type='text/javascript'>var state_code=true;$(function(){$.local_load_all($('#country_id').val(),$('#temp_city').val(),0,"code")})</script>{/literal}
<form action="{""|fn_url}" method="post" class="form-horizontal form-edit  {if !$allow_save} cm-hide-inputs{/if}" name="district_form" enctype="multipart/form-data">
<input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
<input type="hidden" class="cm-no-hide-input" name="district_id" value="{$id}" />

{capture name="tabsbox"}
<div id="content_general">
    <div class="control-group">
        <label for="elm_district_name" class="control-label cm-required">{__("district")}</label>
        <div class="controls">
        <input type="text" name="district_data[name]" id="elm_district_name" value="{$district.name}" size="25" class="input-large" /></div>
    </div>
    
    <div class="control-group">
        <label for="elm_district_code" class="control-label">{__("code")}</label>
        <div class="controls">
        <input type="text" name="district_data[code]" id="elm_district_code" value="{$district.code}" size="25" class="input-large" /></div>
    </div>

    <div class="control-group">
        <label class="control-label cm-required" for='country_id'>{__("country")}</label>
        <div class="controls"><select id="country_id" name="district_data[country_code]">
            <option value="">--</option>
            {foreach from=$countries item=c}
            <option value="{$c.code}" {if $district.country_code==$c.code}selected='selected'{/if}>{$c.country}</option>
            {/foreach}
            </select></div>
    </div>
            
    <div class="control-group">
        <label class="control-label cm-required" for='state_id'>{__("state")}</label>
        <div class="controls"><select name="district_data[state_code]" id='state_id'>
            <option value="">--</option>
            </select>
        </div>
        <input type='hidden' value='{$district.state_code}' id="temp_city" />
    </div>

    <div class="control-group">
        <label for="elm_district_position" class="control-label">{__("position_short")}</label>
        <div class="controls">
            <input type="text" name="district_data[position]" id="elm_district_position" value="{$district.position|default:"0"}" size="3"/>
        </div>
    </div>

    {include file="common/select_status.tpl" input_name="district_data[status]" id="elm_district_status" obj_id=$id obj=$district hidden=false}
</div>
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section track=true}

{capture name="buttons"}
    {if !$id}
        {include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="district_form" but_name="dispatch[district.update]"}
    {else}
        {if "ULTIMATE"|fn_allowed_for && !$allow_save}
            {assign var="hide_first_button" value=true}
            {assign var="hide_second_button" value=true}
        {/if}
        {include file="buttons/save_cancel.tpl" but_name="dispatch[district.update]" but_role="submit-link" but_target_form="district_form" hide_first_button=$hide_first_button hide_second_button=$hide_second_button save=$id}
    {/if}
{/capture}
    
</form>

{/capture}


{if !$id}
    {assign var="title" value=__("new_district")}
{else}
    {assign var="title" value="{__("editing_district")}: `$district.name`"}
{/if}
{include file="common/mainbox.tpl" title=$title content=$smarty.capture.mainbox buttons=$smarty.capture.buttons select_languages=true}

{** district section **}
