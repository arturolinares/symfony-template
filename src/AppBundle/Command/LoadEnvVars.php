<?php

namespace AppBundle\Command;

use Dotenv\Dotenv;

class LoadEnvVars
{
    public static function load()
    {
        $envPath = __DIR__ . '/../../../.env';
        if (!file_exists($envPath) && file_exists($envPath . '.dist')) {
            copy($envPath . '.dist', $envPath);
        }
        $dotenv = new Dotenv(dirname($envPath));
        $dotenv->load();
    }
}
