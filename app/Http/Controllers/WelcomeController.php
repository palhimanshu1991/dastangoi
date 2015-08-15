<?php namespace App\Http\Controllers;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

use Doctrine\Common\Cache\Cache as Doctrine;
use DB;
use App\Event as Event;
use App\User;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$events = Event::take('4')->get();
		$users = User::take('4')->get();
                $coverage = DB::table('press')->take('4')->orderBy('press_date','desc')->get();

		return view('welcome',compact('events','users','coverage'));

	}

	public function about(){		
		return view('about');
	}

	public function contact(){		
		return view('contact');
	}

	public function postContact(){		
		return 'post contact';
	}

		/*
		$response = $client->get('http://www.omdbapi.com/', ['query' => 
					[
						't' => 'Gone+Girl', 
					    'y' => '2014', 
					    'plot' => 'short', 
					    'r' => 'json', 
					    'r]tomatoes' => 'true', 
					]
				]);
		*/


		//echo $response->getStatusCode(); // 200
		//echo $response->getReasonPhrase(); // OK
		//echo $response->getProtocolVersion(); // 1.1


}
