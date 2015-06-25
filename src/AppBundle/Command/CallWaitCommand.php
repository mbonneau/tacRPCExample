<?php


namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CallWaitCommand extends  ContainerAwareCommand {
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('myapp:callwait')
            ->setDescription('Call the wait RPC')
            ->setHelp("The <info>%command.name%</info> calls the wait RPC.");
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getContainer()->get('thruway.client');
        $client->call("com.survos.wait", [3])->then(
            function ($res) use ($output) {
                $output->writeln($res[0]);
            }
        );
    }
}