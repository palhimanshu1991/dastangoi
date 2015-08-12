<?php namespace App\Http\Controllers;

use App\Movie as Movie;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImdbController as Imdb;

use \Cache;
use Mail;
use App\User as User;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

use Illuminate\Foundation\Bus\DispatchesJobs;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex() {

	}

}
