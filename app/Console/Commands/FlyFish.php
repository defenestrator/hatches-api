<?php namespace Hatches\Console\Commands;

use Illuminate\Console\Command;
use Hatches\Commands\InspireFlyFishers;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Fab\SuperFab;

class FlyFish extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'flyfish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(SuperFab $superFab)
    {
        $this->comment(PHP_EOL.$superFab->paint(InspireFlyFishers::quote()).PHP_EOL);
    }

}