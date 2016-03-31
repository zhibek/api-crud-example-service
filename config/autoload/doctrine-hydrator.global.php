<?php
return array(
    'doctrine-hydrator' => array(
        'hydrator-manager-key' => array(
            'entity_class' => 'App\Entity\EntityClass',
            'object_manager' => 'doctrine.objectmanager.key.in.servicelocator',
            'by_value' => true,
            'use_generated_hydrator' => true,
            'naming_strategy' => 'custom.naming.strategy.key.in.servicemanager',
            'hydrator' => 'custom.hydrator.key.in.hydratormanager',
            'strategies' => array(
                'fieldname' => 'custom.strategy.key.in.servicemanager',
            ),
            'filters' => array(
                'custom_filter_name' => array(
                    'condition' => 'and', // optional, default is 'or'
                    'filter'    => 'custom.hydrator.filter.key.in.servicemanager',
                ),
            ),
        ),
    ),
);