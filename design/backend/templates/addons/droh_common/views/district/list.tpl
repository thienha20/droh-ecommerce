<option value=''>--</option>
{foreach from=$districts item=d}
<option value='{$d.district_id}'>{$d.name}</option>
{/foreach}