<?php namespace Hatches\Http\Controllers;

use Route;

/**
 * Class PagesController
 * @package Hatches\Http\Controllers
 */
class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pages Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

    /**
     * @var null
     */
    protected $thisRoute;
    /**
     * @var null
     */
    protected $thisView;
    /**
     * @var null
     */
    protected $htmlPage;

	/**
	 * Create a new controller instance.
	 */
	public function __construct()

	{
        $this->thisRoute = Route::current()->uri();
	}

    protected function htmlPageReponse()
    {
        $this->thisView = Route::current()->getName();
        $this->htmlPage = view('pages.' . $this->thisView)->with(['thisRoute' => $this->thisRoute]);
        return $this->htmlPage;
    }
}
