<?php

namespace Blog;

/**
 * Class Module
 * Carregar as configurações do módulo
 * @package Blog
 * @author Rafael Franco <rafael@joyaweb.com.br>
 */
class Module
{
    /**
     * getConfig()
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__."/../config/module.config.php";
    }

}