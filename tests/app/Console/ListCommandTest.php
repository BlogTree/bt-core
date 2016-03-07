<?php


namespace bt\btRoot\tests\app\Console;


use bt\btRoot\app\Console\Commands\InstallCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class ListCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        $app = new Application();
        $app->add(new InstallCommand());
        
        $command = $app->find('list');
        $commandTester = new CommandTester($command);
        $commandTester->execute(['command' => $command->getName()]);

        $this->assertRegExp('/.../', $commandTester->getDisplay());
    }
}
