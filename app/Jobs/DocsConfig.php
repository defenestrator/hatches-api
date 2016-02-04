<?php namespace Hatches\Jobs;

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->exclude('Console')
    ->in('app');

return new Sami($iterator, array(
    'theme' => 'default',
    'title' => 'Hatch.es API',
    'build_dir' => 'public/docs',
    'cache_dir' => 'public/cache',
    'default_opened_level' => 5,
));
