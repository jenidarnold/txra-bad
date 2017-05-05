<?php namespace App\Http\Controllers\Play;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class EventsController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}
		
	/**
	 * Display index of events.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		return view('events/index', compact('events'));
	}

	/**
	 * Display live events.
	 *
	 * @return Response
	 */
	public function live(Request $request)
	{

		return view('events/show', compact('events'));
	}
}