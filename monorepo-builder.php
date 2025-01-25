<?php

declare(strict_types=1);

use MonorepoBuilderPrefix202408\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MonorepoBuilder\Config\MBConfig;

return static function (MBConfig $mbConfig, ContainerConfigurator $containerConfigurator): void {
    $mbConfig->packageDirectories([__DIR__ . '/packages/laravel']);




};
