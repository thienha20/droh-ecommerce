{** districts section **}

{capture name="mainbox"}

{capture name="sidebar"}
    {include file="addons/droh_common/views/district/components/districts_search_form.tpl" dispatch="district.manage"}
{/capture}


<form action="{""|fn_url}" method="post" name="districts_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />

{if $districts}
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
{foreach from=$districts item=district}
<tr class="cm-row-status-{$district.status|lower}">
    
    <td class="left">
        <input type="checkbox" name="district_ids[]" value="{$district.district_id}" class="cm-item" /></td>
    <td><input type="text" name="district_data[{$district.district_id}][position]" size="55" value="{$district.position}" class="span2 input-hidden" /></td>
    
	<td>
       <input type="text" name="district_data[{$district.district_id}][name]" size="55" value="{$district.name}" class="span4 input-hidden" />
    </td>
    <td><input type="text" name="district_data[{$district.district_id}][code]" size="55" value="{$district.code}" class="span2 input-hidden" /></td>
    
    <td>
        {capture name="tools_list"}
            <li>{btn type="list" text=__("edit") href="district.update?district_id=`$district.district_id`"}</li>        
            <li>{btn type="list" class="cm-confirm cm-post" text=__("delete") href="district.delete?district_id=`$district.district_id`"}</li>        
        {/capture}
        <div class="hidden-tools">
            {dropdown content=$smarty.capture.tools_list}
        </div>
    </td>
    <td class="right">
        {include file="common/select_popup.tpl" id=$district.district_id status=$district.status hidden=false object_id_name="district_id" table="districts" popup_additional_class="`$no_hide_input` dropleft"}
    </td>
</tr>
{/foreach}
</table>
{include file="common/pagination.tpl"}
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{capture name="buttons"}
    {include file="buttons/save.tpl" but_name="dispatch[district.m_update]" but_role="submit-link" but_target_form="districts_form"}
    {capture name="tools_list"}        
        {if $districts}
            <li>{btn type="delete_selected" dispatch="dispatch[district.m_delete]" form="districts_form"}</li>
        {/if}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
{/capture}
{capture name="adv_buttons"}
    {include file="common/tools.tpl" tool_href="district.add" prefix="top" hide_tools="true" title=__("add_district") icon="icon-plus"}
{/capture}


</form>

{/capture}
{include file="common/mainbox.tpl" title=__("district") content_id="manage_district" sidebar=$smarty.capture.sidebar content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons select_languages=true}

{** districts section **}