<?php

$schema['top']['administration']['items']['shippings_taxes']['subitems']['district'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'district.manage',
    'position' => 950
);
//menu top - Administration - Shipping & Taxs
$schema['top']['administration']['items']['shippings_taxes']['subitems']['ward'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'ward.manage',
    'position' => 951
);

return $schema;