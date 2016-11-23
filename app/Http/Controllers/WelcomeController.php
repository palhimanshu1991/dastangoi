<?php namespace App\Http\Controllers;


use App\Author;
use App\Event as Event;
use App\Jobs\SendContactEmail;
use DB;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

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

        $events   = Event::take('4')->get();
        $authors  = Author::take('4')->get();
        $coverage = DB::table('press')->take('4')->orderBy('press_date', 'desc')->get();

        return view('welcome', compact('events', 'authors', 'coverage'));

    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    /**
     * @param Request $request
     */
    public function postContact(Request $request)
    {

        $data = $request->only('name', 'email', 'message');

        (new SendContactEmail($data))->handle();

        return redirect()->back()->with('message', 'Email successfully sent');

    }

}
