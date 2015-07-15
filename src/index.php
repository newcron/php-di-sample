<?php
require "../vendor/autoload.php";


$builder = new \DI\ContainerBuilder();
$container = $builder->addDefinitions("container-definition.php")->buildDevContainer();

$container->call(function(phpdisample\sample\UserService $service){
    $service->save(23, "foobar");
    var_dump($service->get(23));
});