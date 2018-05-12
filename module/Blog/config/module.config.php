<?php

namespace Blog;

/**
 * Módulo de configuração de Blog
 * @package Blog
 * @author Rafael Franco <rafael@joyaweb.com.br>
 */

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controller'    =>  [
        'factories' =>  [
            Controller\BlogController::class => InvokableFactory::class
        ]
    ],
    'router'    =>  [
        'routes'    =>  [
            'blog'  =>  [
                'type'      =>  'Literal',
                'options'   =>  [
                    'route'    =>    '/blog',
                    'defaults'  =>  [
                        'controller'    =>  Controller\BlogController::class,
                        'action'        =>  'index'
                    ]
                ]
            ]
        ]
    ],
    'controllers'   => [
        'invokables'    =>  [
            Controller\BlogController::class => Controller\BlogController::class
        ]
    ],

    'view_manager'  =>  [
        'template_path_stack'   => [
            'blog'  =>  __DIR__."/../view"
        ]
    ]
];