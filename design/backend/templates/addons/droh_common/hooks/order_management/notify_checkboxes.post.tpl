<h3>{__('invoice_vat')}</h3>
<div class="form-horizontal">
    {foreach from=$cart.invoice_vat item=item key=key}
        <div class="control-group">
            <div class="control-label" style="width: 100px;text-align: left">
                <strong>{if $key == 'code'}{__('vat_code')}{else}{__($key)}{/if}</strong></div>
            <div class="controls" style="margin-left:110px">
                <input type="text" name="invoice_vat[{$key}]" style="width: 90%" size="55" id="invoice_vat_{$key}" class="input-large" value="{$item}">
            </div>
        </div>
    {/foreach}
</div>