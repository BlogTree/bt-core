<?php

require_once dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'app.php';

$application = new \Symfony\Component\Console\Application('Blog-Tree console', '0.0.1');
$application->add(new \bt\btRoot\app\Console\Commands\InstallCommand());
$application->add(new \bt\Garden\Foundation\Console\ServeCommand());
$application->run();
