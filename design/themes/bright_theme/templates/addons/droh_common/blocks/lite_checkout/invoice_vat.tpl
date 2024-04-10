<div class="litecheckout__container">
    <div class="litecheckout__group" id="litecheckout_use_billing_address_form">
        <div class="litecheckout__item" style="width: 100%;">
            <div class="ty-profile-field__switch ty-address-switch clearfix litecheckout__address-switch">
                <div class="ty-profile-field__switch-label">
                    <label for="sw_litecheckout_step_billing_address_suffix_no">{__('invoice_vat')}</label></div>
                <div class="ty-profile-field__switch-actions">
                    <input id="sw_litecheckout_step_billing_address_suffix_no" type="checkbox" value="1"
                           name="invoice_vat_selected" data-ca-lite-checkout-field="invoice_vat_selected"
                           data-ca-lite-checkout-auto-save-on-change="true"
                           class="checkbox cm-switch-availability cm-switch-visibility">
                </div>
            </div>
        </div>
    </div>
    <div id="litecheckout_invoice_vat_wrapper">
        <div class="litecheckout__container" id="litecheckout_invoice_vat_info">
            <div class="litecheckout__group">
                <input type="hidden" value="1" name="ship_to_another" data-ca-lite-checkout-field="ship_to_another"
                       data-ca-lite-checkout-auto-save-on-change="true" class="">

                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                     data-ca-error-message-target-method="append">
                    <input class="litecheckout__input" placeholder=" " id="litecheckout_invoice_vat_company"
                           type="text" name="invoice_vat[company]" value="{$cart.invoice_vat.company}"
                           data-ca-lite-checkout-field="invoice_vat.company" data-ca-lite-checkout-auto-save="true"
                           autocomplete="" aria-label="{__('company')}" title="{__('company')}">
                    <label class="litecheckout__label " for="litecheckout_invoice_vat_company">{__('company')}</label>
                </div>

                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                     data-ca-error-message-target-method="append">
                    <input class="litecheckout__input" placeholder=" " id="litecheckout_invoice_vat_email"
                           type="text" name="invoice_vat[email]" value="{$cart.invoice_vat.email}"
                           data-ca-lite-checkout-field="invoice_vat.email" data-ca-lite-checkout-auto-save="true"
                           autocomplete="" aria-label="{__('email')}" title="{__('email')}">
                    <label class="litecheckout__label " for="litecheckout_invoice_vat_email">{__('email')}</label>
                </div>

                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                     data-ca-error-message-target-method="append">
                    <input class="litecheckout__input" placeholder=" " id="litecheckout_invoice_vat_code"
                           type="text" name="invoice_vat[code]" value="{$cart.invoice_vat.email}"
                           data-ca-lite-checkout-field="invoice_vat.code" data-ca-lite-checkout-auto-save="true"
                           autocomplete="" aria-label="{__('vat_code')}" title="{__('vat_code')}">
                    <label class="litecheckout__label " for="litecheckout_invoice_vat_code">{__('vat_code')}</label>
                </div>

                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                     data-ca-error-message-target-method="append">
                    <input class="litecheckout__input" placeholder=" " id="litecheckout_invoice_vat_address"
                           type="text" name="invoice_vat[address]" value="{$cart.invoice_vat.address}"
                           data-ca-lite-checkout-field="invoice_vat.address" data-ca-lite-checkout-auto-save="true"
                           autocomplete="" aria-label="{__('address')}" title="{__('address')}">
                    <label class="litecheckout__label " for="litecheckout_invoice_vat_address">{__('address')}</label>
                </div>
            </div>
            <!--litecheckout_invoice_vat_info--></div>
        <!--litecheckout_invoice_vat_wrapper--></div>
</div>
