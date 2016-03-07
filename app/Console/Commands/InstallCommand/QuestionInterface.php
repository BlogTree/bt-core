<?php


namespace bt\btRoot\app\Console\Commands\InstallCommand;

/**
 * Ask question, wait answer
 * 
 * Interface QuestionInterface
 * @package bt\btRoot\app\Console\Commands\InstallCommand
 */
interface QuestionInterface
{
    /**
     * @return mixed
     */
    public function answer();
}