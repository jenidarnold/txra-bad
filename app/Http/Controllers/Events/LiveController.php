<?php namespace App\Http\Controllers\Events;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class LiveController extends Controller {

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

		return view('events/live/index', compact('events'));
	}

		
	/**
	 * Display index of events.
	 *
	 * @return Response
	 */
	public function show(Request $request)
	{

		return view('events/live/show', compact('event'));
	}
}