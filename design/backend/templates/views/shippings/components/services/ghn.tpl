<fieldset>
<div class="control-group">
    <label class="control-label" for="ship_ghn_system_id">{__("ship_ghn_shop_id")}</label>
    <div class="controls">
    <input id="ship_ghn_system_id" type="text" name="shipping_data[service_params][system_id]" size="30" value="{$shipping.service_params.system_id}"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="token">{__("ship_ghn_token")}</label>
    <div class="controls">
    <input id="token" type="text" name="shipping_data[service_params][token]" size="30" value="{$shipping.service_params.token}"/>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="test_mode">{__("test_mode")}</label>
    <div class="controls">
    <input type="hidden" name="shipping_data[service_params][test_mode]" value="N" />
    <input id="test_mode" type="checkbox" name="shipping_data[service_params][test_mode]" value="Y" {if $shipping.service_params.test_mode == "Y"}checked="checked"{/if} />
    </div>
</div>
</fieldset>