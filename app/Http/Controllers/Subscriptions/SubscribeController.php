<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Subscriber;

class HomeController extends Controller
{
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
     * Display a list of subscribers 
     */
    public fuction index(){

    }

    /**
     * Store (sign up) as new subscription
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $rule = array(
        	'email' => 'required|email',
        	'subscription_id' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

        } else  {
        	// store
        	$subscriber = new Subscriber;
        	$subscriber->email = Input::get('email');
        	$subscriber->subscription_id = Input::get('subscription_id');
        	$subscriber->enabled = true;
        	$subscriber->save();

        	Session::flash('message', 'Successfully scribed to newsletter');

        }

    }


    /**
     * Update a a subscription
     * @param  int $[name] [<description>]
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
    }
}
