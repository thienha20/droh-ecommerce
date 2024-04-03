<?php

$schema['district'] = array (
    'modes' => array (
        'delete' => array (
            'permissions' => 'manage_locations'
        ),
        'districts' => ['permissions' => true],
        'wards' => ['permissions' => true],
        'cities' => ['permissions' => true],
    ),
    'permissions' => array ('GET' => 'view_locations', 'POST' => 'manage_locations'),
);

$schema['ward'] = array (
    'modes' => array (
        'delete' => array (
            'permissions' => 'manage_locations'
        )
    ),
    'permissions' => array ('GET' => 'view_locations', 'POST' => 'manage_locations'),
);

return $schema;
