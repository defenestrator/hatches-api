<?php namespace Hatches\Console\Commands;

use Illuminate\Console\Command;
use Hatches\Commands\InspireFlyFishers;

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
    public function handle()
    {
        $this->comment(PHP_EOL . InspireFlyFishers::quote() . PHP_EOL);
    }

}