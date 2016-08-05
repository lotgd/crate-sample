<?php

require './vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;

use LotGD\Core\Bootstrap;
use LotGD\Core\Configuration;

use LotGD\Crates\Sample\SampleModel;

class SampleBootstrap extends Bootstrap
{
    /**
     * Add a logger that prints to stdout, just for debugging and clarity purposes.
     */
    protected function createLogger(Configuration $config, string $name): LoggerInterface
    {
        $logger = parent::createLogger($config, $name);
        $logger->pushHandler(new StreamHandler('php://stdout', Logger::DEBUG));
        return $logger;
    }
}

$g = (new SampleBootstrap())->getGame();

// Publish an event so the HelloWorld module can respond.
$context = array();
$g->getEventManager()->publish('e/lotgd/hello-world', $context);

echo PHP_EOL;

// Make a new SampleModel entry in the database.
$data = bin2hex(random_bytes(8));

echo "Creating a new SampleModel..." . PHP_EOL;
$sm = new SampleModel();
$sm->setData($data);
$sm->save($g->getEntityManager());

$models = $g->getEntityManager()->getRepository(SampleModel::class)->findAll();
$count = count($models);

echo "New Count of SampleModels: ${count}" . PHP_EOL;
