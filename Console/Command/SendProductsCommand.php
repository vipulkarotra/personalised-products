<?php

namespace Richdynamix\PersonalisedProducts\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SendProductsCommand extends Command
{
    protected function configure()
    {
        $this->setName('pio:send:products');
        $this->setDescription('Send all products to the PredictionIO event server');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Not doing anything just yet!');
    }
}