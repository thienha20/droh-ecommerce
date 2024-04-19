<div class="control-group">
    <label for="access_code" class="control-label">Tài khoản MBB Pay(Access code):</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][access_code]" id="access_code"
               value="{$processor_params.access_code}" class="input-text" size="60"/>
    </div>
</div>
<div class="control-group">
    <label for="merchant_id" class="control-label">Merchant ID:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][merchant_id]" id="merchant_id"
               value="{$processor_params.merchant_id}" class="input-text" size="60"/>
    </div>
</div>

<div class="control-group">
    <label for="secret_key" class="control-label">Mã bảo mật(Secret key):</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][secret_key]" id="secret_key"
               value="{$processor_params.secret_key}" class="input-xxlarge" size="300"/>
    </div>
</div>

<div class="control-group">
    <label for="link_process" class="control-label">Link Process (default sandbox link):</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][link_process]" id="link_process"
               value="{if !empty($processor_params.link_process)}{$processor_params.link_process}{else}https://api-sandbox.mbbank.com.vn/private/ms/pg-paygate/paygate/v2/create-order{/if}"
               class="input-xxlarge" size="300"/>
    </div>
</div>

<div class="control-group">
    <label for="currency" class="control-label">{__('currency')}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <option value="VND" {if $processor_params.currency == "VND"}selected="selected"{/if}>Việt Nam Đồng (VND)
            </option>
            <option value="USD" {if $processor_params.currency == "USD"}selected="selected"{/if}>Dollar (USD)</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label for="payment_method" class="control-label">{__('payment_methods')}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][payment_method]" id="payment_method">
            <option value="ATMCARD" {if $processor_params.payment_method == "ATMCARD"}selected="selected"{/if}>Thanh
                toán
                thẻ nội địa (ATM)
            </option>
            <option value="QR" {if $processor_params.payment_method == "QR"}selected="selected"{/if}>Thanh toán QR code
            </option>
            <option value="EWALLET" {if $processor_params.payment_method == "EWALLET"}selected="selected"{/if}>Thanh
                toán
                bằng ví EWALLET
            </option>
        </select>
    </div>
</div>