<h3>{__('invoice_vat')}</h3>
<div class="form-horizontal">
    {foreach from=$order_info.invoice_vat|json_decode item=item key=key}
        <div class="control-group">
            <div class="control-label" style="width: 100px;text-align: left">
                <strong>{if $key == 'code'}{__('vat_code')}{else}{__($key)}{/if}</strong></div>
            <div class="controls" style="margin-left:110px">
                <div class="text-type-value">{$item}</div>
            </div>
        </div>
    {/foreach}
</div>