@extends('layouts.app')

@section('content')
<section class="page-header page-header-xs">
        <div class="container">

            <h1>LOGIN into TXRA</h1>
           
            <!-- breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="/">Welcome</a></li>
                <li class="active">LOGIN</li>
            </ol><!-- /breadcrumbs -->

        </div>
    </section>
    <!-- /PAGE HEADER -->

    <!-- -->
    <section>
        <div class="container">
            <div class="row">
            <!-- LOGIN EMAIL-->
                <div class="col-md-4 col-sm-12 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                   <form class="nomargin sky-form boxed" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                         <header>
                        <i class="fa fa-envelope"></i> Login with your Email address
                        </header>

                        <fieldset class="nomargin"> 

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-envelope"></i>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address">
                                <b class="tooltip tooltip-bottom-right">Your email address will be used to login</b>
                                </label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-lock"></i>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                    <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                                </label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="clearfix note margin-bottom-30">
                                <a class="pull-right" href="{{ url('/password/reset') }}">Forgot Password?</a>
                            </div>

                            <label class="checkbox weight-300">
                                <input type="checkbox" name="checkbox-inline">
                                <i></i> Keep me logged in
                            </label>
                        </fieldset>

                        <div class="row margin-bottom-20">
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- \LOGIN EMAIL -->
               
                <!-- LOGIN R2SPORTS -->
                <div class="col-md-4 col-sm-12 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                   <form class="nomargin sky-form boxed" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <header>
                        <img class="" style="height:30px" src="{{ asset('images/logos/r2sports.gif') }}" ></i> Login with your USAR account
                        </header>

                        <fieldset class="nomargin"> 

                            <div class="form-group{{ $errors->has('usar_id') ? ' has-error' : '' }}">
                                <label class="input margin-bottom-10">
                                    <input id="usar_id" type="text" class="form-control" name="usar_id" value="{{ old('usar_id') }}" placeholder="USAR User ID">
                                <b class="tooltip tooltip-bottom-right">Your USAR userID will be used to login</b>
                                </label>
                                @if ($errors->has('usar_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usar_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-lock"></i>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                    <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                                </label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </fieldset>

                        <div class="row margin-bottom-20">
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                            </div>
                        </div>
                      
                    </form>
                                   
                </div>
               
                <div class="col-md-4 col-sm-12 text-center">                  
                        <a class="btn btn-block btn-social btn-facebook margin-top-10">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
