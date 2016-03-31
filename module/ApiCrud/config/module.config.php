<?php
return array(
    'router' => array(
        'routes' => array(
            'api_crud.rest.doctrine.user' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user[/:user_id]',
                    'defaults' => array(
                        'controller' => 'ApiCrud\\V1\\Rest\\User\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'api_crud.rest.doctrine.user',
        ),
    ),
    'zf-rest' => array(
        'ApiCrud\\V1\\Rest\\User\\Controller' => array(
            'listener' => 'ApiCrud\\V1\\Rest\\User\\UserResource',
            'route_name' => 'api_crud.rest.doctrine.user',
            'route_identifier_name' => 'user_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ApiCrud\\Entity\\User',
            'collection_class' => 'ApiCrud\\V1\\Rest\\User\\UserCollection',
            'service_name' => 'User',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'ApiCrud\\V1\\Rest\\User\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'ApiCrud\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.api_crud.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'ApiCrud\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.api_crud.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'ApiCrud\\Entity\\User' => array(
                'route_identifier_name' => 'user_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api_crud.rest.doctrine.user',
                'hydrator' => 'ApiCrud\\V1\\Rest\\User\\UserHydrator',
            ),
            'ApiCrud\\V1\\Rest\\User\\UserCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api_crud.rest.doctrine.user',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'ApiCrud\\V1\\Rest\\User\\UserResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ApiCrud\\V1\\Rest\\User\\UserHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'ApiCrud\\V1\\Rest\\User\\UserHydrator' => array(
            'entity_class' => 'ApiCrud\\Entity\\User',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'ApiCrud\\V1\\Rest\\User\\Controller' => array(
            'input_filter' => 'ApiCrud\\V1\\Rest\\User\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'ApiCrud\\V1\\Rest\\User\\Validator' => array(
            0 => array(
                'name' => 'username',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'password',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => 64,
                        ),
                    ),
                ),
            ),
        ),
    ),
);