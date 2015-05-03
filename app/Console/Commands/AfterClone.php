<?php namespace Hatches\Console\Commands;

use Illuminate\Console\Command;


class AfterClone extends Command
{
    protected $name = 'afterclone';
    protected $description = 'Almost Everything we need to do after `git clone`';


    public function handle()
    {
        $script = 'resources/scripts/post-clone-process.sh';
        exec('bash ' . $script);
    }
}