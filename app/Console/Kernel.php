<?php namespace Hatches\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'Hatches\Console\Commands\Inspire',
        'Hatches\Console\Commands\FlyFish',
        'Hatches\Console\Commands\Docs',
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
//	protected function schedule(Schedule $schedule)
//	{
//         exec shell command
//        $schedule->exec('cp this/file that/file')->monthly()->sendOutputTo('storage/logs/');
//		 php artisan inspire
//        $schedule->command('inspire')
//				 ->hourly();
//	}

}
