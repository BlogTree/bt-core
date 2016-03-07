<?php


namespace bt\btRoot\app\Console\Commands;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class InstallCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:install')
            ->setDescription('Run application installation')
            ->addArgument('defaultInstallation', InputArgument::OPTIONAL, 'Default installation', 'default')
            ->addOption('development', null, InputOption::VALUE_OPTIONAL, 'If set - install version for development', false);
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /*$name = $input->getArgument('name');
        if ($name) {
            $text = $name;
        }
        
        $output->writeln($text);*/

        /** Title */
        $helper = $this->getHelper('question');
        
        $question = new Question('Name (Blog-Tree)', 'Blog-Tree');
        $appTitle = $helper->ask($input, $output, $question);
        
        /** DB */
        $question = new ChoiceQuestion(
            'Storage (MySQL)',
            ['sqlite', 'mysql', 'postgresql'],
            'sqlite'
        );
        $question->setErrorMessage('Storage %s is invalid.');
        $storage = $helper->ask($input, $output, $question);
        
        if ($storage == 'sqlite') {
            
            $defaultPath = realpath(__DIR__ . '/../../../../storage/database.sqlite');
            
            $question = new Question(
                'Path to storage (' . $defaultPath . ')',
                $defaultPath
            );
            
            $sqlitePath = $helper->ask($input, $output, $question);
        } else {
            $dbHost = 'localhost';

            $question = new Question(
                'DB host (' . $dbHost . ')',
                $dbHost
            );

            $dbHost = $helper->ask($input, $output, $question);

            $dbDatabase = 'blog_tree';

            $question = new Question(
                'DB database name (' . $dbDatabase . ')',
                $dbDatabase
            );
            $dbDatabase = $helper->ask($input, $output, $question);

            $question = new Question('DB username');
            $dbUsername = $helper->ask($input, $output, $question);

            $question = new Question('DB password');
            $dbPassword = $helper->ask($input, $output, $question);
        }
        
    }
    
}
