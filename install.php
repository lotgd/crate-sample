<?php

require './vendor/autoload.php';

$g = \LotGD\Core\Bootstrap::createGame();

$composer = \Composer\Factory::create(new \Composer\IO\NullIO());
$packages = $composer->getRepositoryManager()->getLocalRepository()->getPackages();

foreach($packages as $p) {
    if ($p->getType() === 'lotgd-module') {
        $name = $p->getName();
        try {
            \LotGD\Core\ModuleManager::register($g, $name, $p);
        } catch(\LotGD\Core\Exceptions\ModuleAlreadyExistsException $e) {
            print "Ignoring already installed module: {$name}" . PHP_EOL;
        }
    }
}
