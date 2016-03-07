<?php


namespace bt\btRoot\app\Console\Commands\InstallCommand;


abstract class Question implements QuestionInterface
{
    public function answer()
    {
        $this->sendQuestion();
        
        return $this->getAnswer();
    }
    
    abstract protected function sendQuestion();

    abstract protected function getAnswer();
    
}