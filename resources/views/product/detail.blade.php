@extends('layout')

@section('content')

<div ng-app="detailApp" ng-controller="detailController">

    <div id="wall_1" class="image" data-stellar-background-ratio="0.4">
        <div class="txtprlx concon">
            <div class="txtprllx">
                <h1>[[row.name]]</h1>
                <h4>consectetur adipiscing elit. Quisque condimentum dui velit, ut congue ipsum sodales fringilla. Nulla ultrices ligula et odio vestibulum facilisis.</h4>
            </div>
        </div>
    </div>

    <div class="row gray marginbottom">
        <div class="concon">
            <p><a href="{{url()}}">Home</a> &gt; [[data.name]]</p>
        </div>
    </div>

    <div class="concon">
        <div class="col-md-8">

            <ul class="list-inline text-center borderbottom">
                <li class="animated rubberBand full-md-8"><img src="{{asset('img/ico/tv.png')}}" alt="logo"/><br>Plasma TV</li>
                <li class="animated rubberBand full-md-8"><img src="{{asset('img/ico/wifi.png')}}" alt="logo"/><br>Free Wifi</li>
                <li class="animated rubberBand full-md-8"><img src="{{asset('img/ico/pool.png')}}" alt="logo"/><br>Pool</li>
                <li class="animated rubberBand full-md-8"><img src="{{asset('img/ico/breakfast.png')}}" alt="logo"/><br>Breakfast</li>
                <li class="animated rubberBand full-md-8"><img src="{{asset('img/ico/pet.png')}}" alt="logo"/><br>Pet Allowed</li>
                <li class="animated rubberBand full-md-8"><img src="{{asset('img/ico/accesbility.png')}}" alt="logo"/><br>Accesbility</li>
                <li class="animated rubberBand full-md-8"><img src="{{asset('img/ico/parking.png')}}" alt="logo"/><br>Parking</li>
            </ul>

            <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 730px; height: 450px; background: #fff; overflow: hidden;">

                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;"></div>
                    <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%;"></div>
                </div>

                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 730px; height: 450px; overflow: hidden;">
                    <div ng-repeat="img in data.image">
                        <img u="image" src="[[img.image_url]]" />
                        <img u="thumb" src="[[img.image_url]]" />
                    </div>
                </div>
                
                <span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;"></span>
                <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px"></span>

                <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
                    <!-- Thumbnail Item Skin Begin -->
                    <div u="slides" style="cursor: default;">
                        <div u="prototype" class="p">
                            <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                            <div class=c></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!--#endregion Thumbnail Navigator Skin End -->
            </div>

            <div class="col-md-3">
                <h3>Description</h3>
            </div>
            <div class="col-md-9">
                [[data.description]]
            </div>

            <div class="col-md-3">
                <h3>Hotel facilities</h3>
            </div>
            <div class="col-md-9 marginbottom">
                <p>Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. 
                Sit cu detraxit constituam, an mel iudico constituto efficiendi.</p>
                <div class="col-md-3 list-detail"><img src="{{asset('img/brg/1list.png')}}" alt="logo"/></div>
                <div class="col-md-3 list-detail"><img src="{{asset('img/brg/2list.png')}}" alt="logo"/></div>
                <div class="col-md-3 list-detail"><img src="{{asset('img/brg/3list.png')}}" alt="logo"/></div>
                <div class="col-md-3 list-detail"><img src="{{asset('img/brg/4list.png')}}" alt="logo"/></div>
            </div>
        </div>

        <div class="col-md-4">
            <button class="btn btn-pink btn-lg animated fadeIn width-max">View On Map</button>
            <div class="box text-center">
                <h3><span class="grayspan">Check Avaibility</span></h3>
                <div class="col-md-6">
                    <p>Check In</p>
                </div>
                <div class="col-md-6">
                    <p>Check Out</p>
                </div>
                <h5><a href="{{ url('cart') }}" class="greenspan">Check Now</a></h5>
                <h5><span class="greenbox">Add To Wishlist</span></h5>
            </div>
            <div class="box text-center">
                <img src="{{asset('img/ico/telepon.png')}}" class="animated rubberBand telepon" alt="logo"/>
                <h4><span class="pink">Book </span>By Phone</h4>
                <h3 class="cyan">+45 423 445 99</h3>
                <p>Monday to Friday 9.00am - 7.30pm</p>
            </div>
        </div>
        <div class="row"></div>
    </div>


    <script>
        var detailApp = angular.module('detailApp', [], function($interpolateProvider) {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
        });
        detailApp.controller('detailController', function($scope, $http) {
            $http.get(" {{ url('api/product/'. $ID) }}")
            .success(function(response) {
                $scope.data = response;
            })
            .error(function() {
                console.log('Unable to retrieve info from JSON file.');
             });
        });
    </script>
@stop

@section('custom_js')

<script type="text/javascript" src="{{asset('js/jssor.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jssor.slider.js')}}"></script>
<script>

    jQuery(document).ready(function ($) {

        var _SlideshowTransitions = [
            //Fade in L
            {$Duration: 1200, x: 0.3, $During: {$Left: [0.3, 0.7]}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
            //Fade out R
            , {$Duration: 1200, x: -0.3, $SlideOut: true, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
            //Fade in R
            , {$Duration: 1200, x: -0.3, $During: {$Left: [0.3, 0.7]}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
            //Fade out L
            , {$Duration: 1200, x: 0.3, $SlideOut: true, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}

            //Fade in T
            , {$Duration: 1200, y: 0.3, $During: {$Top: [0.3, 0.7]}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2, $Outside: true}
            //Fade out B
            , {$Duration: 1200, y: -0.3, $SlideOut: true, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2, $Outside: true}
            //Fade in B
            , {$Duration: 1200, y: -0.3, $During: {$Top: [0.3, 0.7]}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
            //Fade out T
            , {$Duration: 1200, y: 0.3, $SlideOut: true, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}

            //Fade in LR
            , {$Duration: 1200, x: 0.3, $Cols: 2, $During: {$Left: [0.3, 0.7]}, $ChessMode: {$Column: 3}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2, $Outside: true}
            //Fade out LR
            , {$Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: {$Column: 3}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2, $Outside: true}
            //Fade in TB
            , {$Duration: 1200, y: 0.3, $Rows: 2, $During: {$Top: [0.3, 0.7]}, $ChessMode: {$Row: 12}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
            //Fade out TB
            , {$Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: {$Row: 12}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}

            //Fade in LR Chess
            , {$Duration: 1200, y: 0.3, $Cols: 2, $During: {$Top: [0.3, 0.7]}, $ChessMode: {$Column: 12}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2, $Outside: true}
            //Fade out LR Chess
            , {$Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: {$Column: 12}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
            //Fade in TB Chess
            , {$Duration: 1200, x: 0.3, $Rows: 2, $During: {$Left: [0.3, 0.7]}, $ChessMode: {$Row: 3}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2, $Outside: true}
            //Fade out TB Chess
            , {$Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: {$Row: 3}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}

            //Fade in Corners
            , {$Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]}, $ChessMode: {$Column: 3, $Row: 12}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2, $Outside: true}
            //Fade out Corners
            , {$Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]}, $SlideOut: true, $ChessMode: {$Column: 3, $Row: 12}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2, $Outside: true}

            //Fade Clip in H
            , {$Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: {$Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
            //Fade Clip out H
            , {$Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: {$Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
            //Fade Clip in V
            , {$Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: {$Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
            //Fade Clip out V
            , {$Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: {$Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
        ];

        var options = {
            $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlayInterval: 1500, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 800, //Specifies default duration (swipe) for slide in milliseconds

            $SlideshowOptions: {//[Optional] Options to specify and enable slideshow or not
                $Class: $JssorSlideshowRunner$, //[Required] Class to create instance of slideshow
                $Transitions: _SlideshowTransitions, //[Required] An array of slideshow transitions to play slideshow
                $TransitionsOrder: 1, //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
            },
            $ArrowNavigatorOptions: {//[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
            },
            $ThumbnailNavigatorOptions: {//[Optional] Options to specify and enable thumbnail navigator or not
                $Class: $JssorThumbnailNavigator$, //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always

                $ActionMode: 1, //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                $SpacingX: 8, //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                $DisplayPieces: 10, //[Optional] Number of pieces to display, default value is 1
                $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth)
                jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 730), 450));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>

@stop