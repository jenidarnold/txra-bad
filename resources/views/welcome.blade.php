@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')
        <!-- LAYER SLIDER -->
            <section id="slider">

                <div class="slider">

                    <div class="layerslider" style="height:500px; width:100%;">

                        <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">

                            <!-- background image -->
                            <img src="{{ asset('images/landing_men.jpg')}} " class="ls-bg" alt="Slide background"/>

                            <span class="ls-l" style="top:250px;left:100px;font-weight: 300;height:100px; width:80px;padding-right:10px;padding-left:10px;vertical-align:center;font-size:30px;line-height:50px;color:#ffffff;background:#071935;border-radius:0px;white-space: nowrap;" data-ls="durationin:1500;delayin:300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
                                TEXAS <br/>
                            </span>
                            <span class="ls-l" style="top:275px;left:100px;font-weight: 300;height:100px; width:80px;padding-right:10px;padding-left:10px;text-align:center;font-size:30px;line-height:50px;color:#ffffff;border-radius:0px;white-space: nowrap;" data-ls="durationin:1500;delayin:300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="ls-l" style="top:250px;left:200px;font-weight: 300;height:50px; width:200px; padding-right:10px;padding-left:10px;font-size:30px;line-height:50px;color:#071935;background:#ffffff;border-radius:0px;white-space: nowrap;" data-ls="durationin:1500;delayin:1000;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
                                RACQUETBALL
                            </span>
                            <span class="ls-l" style="top:300px;left:200px;font-weight: 300;height:50px;width:200px; padding-right:10px;padding-left:10px;font-size:30px;line-height:50px;color:#ffffff;background:#d80606;border-radius:0px;white-space: nowrap;" data-ls="durationin:1500;delayin:1700;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
                                ASSOCIATION
                            </span>
                            <!--p class="ls-l" style="top:350px;left:100px;font-weight: 300;font-size:24px;color:#333;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:2100;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
                                committed to excellence
                            </p>
                            <p class="ls-l" style="top:375px;left:100px;font-weight: 300;font-size:24px;color:#333;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:2100;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
                                and service to our members
                            </p-->
                            <p class="ls-l" data-ls="
                                offsetxin:0;
                                durationin:1500;
                                delayin:3100;
                                easingin:easeOutElastic;rotatexin:90;
                                transformoriginin:50% top 0;
                                offsetxout:100;
                                durationout:1000;
                                rotatexout:90;
                                transformoriginout:50% bottom 0;"
                                style="top:370px;left:100px;font-weight: 300; text-align: right;width:310px;height:80px;padding-right:10px;font-size:22px;line-height:37px;color:#ffffff;background:#a57a18;white-space: nowrap;">
                                committed to excellence<br/>
                                and service to our members
                            </p>
                        </div>

                        <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:8000;transition2d:21,105;">

                            <!-- background image -->
                            <img src="{{ asset('images/landing_julie.jpeg') }}" class="ls-bg" alt="Slide background"/>

                            <p class="ls-l" style="top:44%;left:50%;font-weight: 300;font-size:30px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:50;durationin:750;easingin:easeOutBack;skewxin:-50;offsetxout:-50;durationout:600;showuntil:500;easingout:easeInBack;skewxout:50;">
                                participate in
                            </p>
                            <p class="ls-l" style="top:52%;left:50%;font-weight: 300;font-size:50px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:-100;durationin:750;delayin:250;easingin:easeOutBack;skewxin:-50;offsetxout:100;durationout:600;showuntil:500;easingout:easeInBack;skewxout:50;">
                                Texas Sanctioned Events
                            </p>

                            <img class="ls-l" data-ls="offsetxin:-100;durationin:2000;delayin:1500;offsetxout:-100;durationout:1000;parallaxlevel:-2;" style="top:30%;left:50%;width:120%;height:auto;white-space: nowrap;" src="{{asset('images/demo/layerslider/slide-b-1.png')}}" alt="">
                            <img class="ls-l" data-ls="offsetxin:50;durationin:2000;delayin:1500;offsetxout:50;durationout:1000;parallaxlevel:1;" style="top:3px;left:137px;white-space: nowrap;" src="{{ asset('images/demo/layerslider/slide-b-2.png') }}" alt="">
                            <img class="ls-l" data-ls="offsetxin:100;durationin:2000;delayin:1500;offsetxout:100;durationout:1000;parallaxlevel:3;" style="top:203px;left:383px;white-space: nowrap;" src="{{ asset('images/demo/layerslider/slide-b-3.png') }}" alt="">
                            <img class="ls-l" data-ls="offsetxin:150;durationin:2000;delayin:1500;offsetxout:150;durationout:1000;parallaxlevel:5;" style="top:206px;left:486px;white-space: nowrap;" src="{{ asset('images/demo/layerslider/slide-b-4.png') }}" alt="">
                            <img class="ls-l" data-ls="offsetxin:200;durationin:2000;delayin:1500;offsetxout:200;durationout:1000;parallaxlevel:7;" style="top:171px;left:559px;white-space: nowrap;" src="asset('images/demo/layerslider/slide-b-5.png') }}" alt="">

                            <p class="ls-l" style="top:47%;left:690px;font-weight: 500;font-size:35px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:1500;rotateyin:90;transformoriginin:left 50% 0;offsetxout:0;durationout:1500;showuntil:1000;rotateyout:-90;transformoriginout:left 50% 0;">
                                JOIN<br />TODAY
                            </p>
                            <img class="ls-l" style="top:45%;left:585px;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1500;rotateyin:90;transformoriginin:right 50% 0;offsetxout:0;durationout:1500;showuntil:1000;rotateyout:-90;transformoriginout:right 50% 0;" src="asset('images/racquet.png') }}" alt="">
                        </div>
                        <!-- /SLIDE- ->

                        <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:8000;transition2d:21,105;timeshift:-1000;">

                            <!-- background -->
                            <img src="{{ asset('images/rball-action.gif') }}" class="ls-bg" alt="Slide background"/>

                            <img class="ls-l" data-ls="
                                offsetxin:0;
                                durationin:1500;
                                delayin:3000;
                                easingin:linear;
                                scalexin:0;
                                scaleyin:0;
                                offsetxout:0;
                                durationout:1500;
                                showuntil:1;
                                easingout:linear;
                                scalexout:2;
                                scaleyout:2;"
                                style="top:20px;left:50%;white-space: nowrap;" src="{{ asset('images/demo/layerslider/circle.png') }}" alt="">
                            <img class="ls-l" data-ls="
                                offsetxin:0;
                                durationin:1500;
                                delayin:4000;
                                easingin:linear;
                                scalexin:0;
                                scaleyin:0;
                                offsetxout:0;
                                durationout:1500;
                                showuntil:1;
                                easingout:linear;
                                scalexout:2;
                                scaleyout:2;"
                                style="top:20px;left:50%;white-space: nowrap;" src="{{ asset('images/demo/layerslider/circle.png') }}" alt="">

                            <!-- left -->
                            <p class="ls-l" data-ls="
                                offsetxin:0;
                                durationin:2500;
                                delayin:1000;
                                scalexin:0;
                                scaleyin:0;
                                offsetxout:0;
                                scalexout:0;
                                scaleyout:0;"
                                style="top:124px;left:156px;font-weight: 300; opacity: .4;font-size:200px;color:#fff;white-space: nowrap;">
                                &amp;
                            </p>
                            <p class="ls-l" data-ls="
                                offsetxin:-50;
                                durationin:2000;
                                delayin:1000;
                                offsetxout:-50;
                                durationout:1000;"
                                style="top:320px;left:120px;font-weight: 300; background: white; background: rgba(255,255,255,.85); height:40px; padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#A94545;white-space: nowrap;">
                                ALL THESE FEATURES
                            </p>
                            <p class="ls-l" data-ls="
                                offsetxin:50;
                                delayin:2000;
                                skewxin:-60;
                                offsetxout:-50;
                                durationout:1000;
                                skewxout:-60;"
                                style="top:360px;left:273px;font-weight: 500;font-size:30px;color:#fff;white-space: nowrap;">
                                much more!
                            </p>

                            <!-- right -->
                            <p class="ls-l" data-ls="
                                offsetxin:0;
                                delayin:2500;
                                rotatein:90;
                                transformoriginin:right bottom 0;
                                offsetxout:0;
                                durationout:1500;
                                transformoriginout:right bottom 0;"
                                style="top:320px;left:1013px;font-weight: 500; text-align: right;font-size:30px;color:#fff;white-space: nowrap;">
                                ...to create
                            </p>
                            <p class="ls-l" data-ls="
                                offsetxin:0;
                                durationin:2500;
                                delayin:3250;
                                easingin:easeOutElastic;rotatexin:90;
                                transformoriginin:50% top 0;
                                offsetxout:0;
                                durationout:1000;
                                rotatexout:90;
                                transformoriginout:50% bottom 0;"
                                style="top:360px;left:890px;font-weight: 300; text-align: right;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f06a52;white-space: nowrap;">
                                THE BEST SLIDER
                            </p>
                            <p class="ls-l" data-ls="
                                offsetxin:-50;
                                delayin:3500;
                                skewxin:60;
                                scalexin:1.5;
                                offsetxout:-50;
                                durationout:1000;
                                skewxout:60;
                                scalexout:1.5;"
                                style="top:405px;left:883px;font-size:30px;color:#fff;white-space: nowrap;">
                                with no compromises!
                            </p>
                        </div>
                    </div>

                    <script type="text/javascript">
                        var layer_options = {
                            responsive:         false,
                            responsiveUnder:    1280,
                            layersContainer:    1280,
                            hoverPrevNext:      true,
                            skinsPath:      'assets/plugins/slider.layerslider/skins/'
                        }
                    </script>

                </div>

            </section>
            <!-- /LAYER SLIDER -->


            <!-- CALLOUT -->
            <div class="alert alert-transparent bordered-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-12"><!-- left text -->
                            <h3>Join the Racquetball community in supporting the sport on the local, national and international levels.</h3>
                            <p class="font-lato weight-300 size-20 nomargin-bottom">
                                Send a definitive message about the passion of racquetball players to Facilities, Manufacturers and Sponsors to help insure the long term future and growth of the sport.
                            </p>
                        </div><!-- /left text -->
                        <div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
                            <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-primary btn-lg">JOIN NOW</a>
                        </div><!-- /right btn -->
                    </div>
                </div>
            </div>
        <!-- /CALLOUT -->

        <!-- BLOG SLIDER-->
        @include('includes.blogslider')     
        <!-- /EVENT SLIDER -->

        <!-- EVENT SLIDER-->
        @include('includes.eventslider', array('event_type' => 'LIVE'))        
        <!-- /EVENT SLIDER -->
@stop
