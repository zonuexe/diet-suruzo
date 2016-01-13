<?php

namespace DietSuruzo;

final class Application extends \Dietcube\Application
{
    public function __construct()
    {
        $base = dirname(__DIR__);
        $dotenv = new \Dotenv\Dotenv($base);
        $dotenv->load();

        parent::__construct($base, $_ENV['DIET_ENV'] ?? 'development');
    }

    public function config(\Pimple\Container $container)
    {
    }
}
