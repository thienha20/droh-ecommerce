{if $in_popup}
<div class="adv-search">
    <div class="group">
{else}
    <div class="sidebar-row">
    <h6>{__("search")}</h6>
{/if}
<script type='text/javascript'>var state_code=true;</script>
{script src="js/addons/droh_common/func_admin.js"}
<form action="{""|fn_url}" name="pages_search_form" method="get" class="{$form_meta}">

{capture name="simple_search"}

<div class="sidebar-field">
    <label>{__("ward")}</label>
    <input type="text" name="name" size="20" value="{$search.name}" />
</div>
<div class="sidebar-field">
    <label>{__("code")}</label>
    <input type="text" name="code" size="20" value="{$search.code}" />
</div>
<div class="sidebar-field">
    <label>{__("country")}</label>
    <select name="country_id" id="country_id">
        <option value="">--</option>
        {foreach from=$countries item=c}
        <option value="{$c.code}" {if $search.country_id==$c.code}selected='selected'{/if}>{$c.country}</option>
        {/foreach}
    </select>
</div>
<div class="sidebar-field">
    <label>{__("city")}</label>
    <select name="state_id" id="state_id">
        <option value="">--</option>
    </select>
</div>
<div class="sidebar-field">
    <label>{__("district")}</label>
    <select name="district_id" id="district_id">
        <option value="">--</option>
    </select>
</div>
<div class="sidebar-field">
    <label class="control-label">{__("status")}</label>
    <div class="controls">
        <select name="status">
            <option value="">--</option>
            <option value="A" {if $search.status == "A"}selected="selected"{/if}>{__("active")}</option>
            <option value="D" {if $search.status == "D"}selected="selected"{/if}>{__("disabled")}</option>
        </select>
    </div>
</div>
{/capture}
{include file="common/advanced_search.tpl" simple_search=$smarty.capture.simple_search dispatch=$dispatch view_type="ward" in_popup=true}

</form>
{if $in_popup}
    </div></div>
{else}
    </div><hr>
{/if}