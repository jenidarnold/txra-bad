<?php namespace App\Http\Controllers\Members;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class MemberController extends Controller {

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
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		return view('members/profiles/index');
	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function matches(Request $request)
	{

		return view('members/matches');
	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function show(Request $request)
	{

		return view('members/profiles/show');
	}

	/**
	 * Display member rankings.
	 *
	 * @return Response
	 */
	public function rankings(Request $request)
	{

		return view('members/rankings');
	}
}