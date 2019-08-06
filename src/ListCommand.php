<?php
namespace Async;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListCommand extends Command
{
    protected function configure()
    {
        $this->setName('list');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('显示');
    }
}