{** wards section **}

{capture name="mainbox"}

{capture name="sidebar"}     
    {include file="addons/droh_common/views/ward/components/wards_search_form.tpl" dispatch="ward.manage"}
{/capture}


<form action="{""|fn_url}" method="post" name="wards_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />

{if $wards}
{include file="common/pagination.tpl" save_current_page=true save_current_url=true}
<table class="table table-middle">
<thead>
<tr>
    <th width="1%" class="left">
        {include file="common/check_items.tpl" class="cm-no-hide-input"}</th>
    <th>{__("position")}</th>
	<th>{__("name")}</th>
    <th>{__("code")}</th>
    
    <th width='6%'>&nbsp;</th>
    <th width="10%" class="right">{__("status")}</th>
</tr>
</thead>
{foreach from=$wards item=ward}
<tr class="cm-row-status-{$ward.status|lower}">
    
    <td class="left">
        <input type="checkbox" name="ward_ids[]" value="{$ward.ward_id}" class="cm-item" /></td>
    <td><input type="text" name="ward_data[{$ward.ward_id}][position]" size="55" value="{$ward.position}" class="span2 input-hidden" /></td>
    
	<td>
       <input type="text" name="ward_data[{$ward.ward_id}][name]" size="55" value="{$ward.name}" class="span4 input-hidden" />
    </td>
    <td><input type="text" name="ward_data[{$ward.ward_id}][code]" size="55" value="{$ward.code}" class="span2 input-hidden" /></td>
    
    <td>
        {capture name="tools_list"}
            <li>{btn type="list" text=__("edit") href="ward.update?ward_id=`$ward.ward_id`"}</li>        
            <li>{btn type="list" class="cm-confirm cm-post" text=__("delete") href="ward.delete?ward_id=`$ward.ward_id`"}</li>        
        {/capture}
        <div class="hidden-tools">
            {dropdown content=$smarty.capture.tools_list}
        </div>
    </td>
    <td class="right">
        {include file="common/select_popup.tpl" id=$ward.ward_id status=$ward.status hidden=false object_id_name="ward_id" table="wards" popup_additional_class="`$no_hide_input` dropleft"}
    </td>
</tr>
{/foreach}
</table>
{include file="common/pagination.tpl"}
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{capture name="buttons"}
    {include file="buttons/save.tpl" but_name="dispatch[ward.m_update]" but_role="submit-link" but_target_form="wards_form"}
    {capture name="tools_list"}        
        {if $wards}
            <li>{btn type="delete_selected" dispatch="dispatch[ward.m_delete]" form="wards_form"}</li>
        {/if}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
{/capture}
{capture name="adv_buttons"}
    {include file="common/tools.tpl" tool_href="ward.add" prefix="top" hide_tools="true" title=__("add_ward") icon="icon-plus"}
{/capture}


</form>

{/capture}
{include file="common/mainbox.tpl" title=__("ward") content_id="manage_ward" sidebar=$smarty.capture.sidebar content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons select_languages=true}

{** wards section **}