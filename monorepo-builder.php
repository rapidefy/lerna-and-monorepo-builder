<?php

declare(strict_types=1);

use MonorepoBuilderPrefix202408\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MonorepoBuilder\Config\MBConfig;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\PushNextDevReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\PushTagReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\SetCurrentMutualDependenciesReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\SetNextMutualDependenciesReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\TagVersionReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\UpdateBranchAliasReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\UpdateReplaceReleaseWorker;

return static function (MBConfig $mbConfig, ContainerConfigurator $containerConfigurator): void {
  $services = $containerConfigurator->services();
  $mbConfig->packageDirectories([__DIR__ . '/packages/laravel']);


  $services->set(UpdateReplaceReleaseWorker::class);
  $services->set(SetCurrentMutualDependenciesReleaseWorker::class);
  $services->set(TagVersionReleaseWorker::class);
  $services->set(PushTagReleaseWorker::class);
  $services->set(SetNextMutualDependenciesReleaseWorker::class);
  $services->set(UpdateBranchAliasReleaseWorker::class);
  $services->set(PushNextDevReleaseWorker::class);

};
