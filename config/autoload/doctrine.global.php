<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'api_crud_entities' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../../module/ApiCrud/src/ApiCrud/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'ApiCrud\Entity' => 'api_crud_entities'
                ),
            ),
        ),
    ),
);