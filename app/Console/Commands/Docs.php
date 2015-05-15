<?php namespace Hatches\Console\Commands;

use Hatches\Commands\DocsConfig;
use Illuminate\Console\Command;

class Docs extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'docs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate API documentation with Sami!';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment(PHP_EOL . 'Generating some totally rad API documentation for you' . PHP_EOL);
        return exec('php vendor/edos-io/sami/sami.php update app/Commands/DocsConfig.php');
    }

}