<?php
$schema['lite_checkout_invoice_vat'] = array(
    'templates' => ['addons/droh_common/blocks/lite_checkout/invoice_vat.tpl' => []],
    'show_on_locations' => ['checkout'],
    'wrappers'          => 'blocks/lite_checkout/wrappers',
);

return $schema;