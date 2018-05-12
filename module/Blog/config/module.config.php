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
        'blog'  =>  [
            'type'      =>  'literal',
            'options'   =>  '/blog',
            'defaults'  =>  [
                'controller'    =>  Controller\BlogController::class,
                'action'        =>  'index'
            ]
        ]
    ],
    'view_manager'  =>  [
        'template_path_stack'   => [
            'blog'  =>  __DIR__."/../view"
        ]
    ]
];