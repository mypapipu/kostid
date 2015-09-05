@extends('layout')

@section('custom_css')
    <link href="{{url('/css/cart.css')}}" rel="stylesheet" />
@stop

@section('content')
<section id="hero_2">
    <div class="intro_title animated fadeInDown">
        <h1>Place your order</h1>
        <div class="bs-wizard">
            
            <div class="col-xs-4 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">Cart</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="{{url('cart')}}" class="bs-wizard-dot"></a>
            </div>
                               
            <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">Payment</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="{{url('payment')}}" class="bs-wizard-dot"></a>
            </div>
            
            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">Finish!</div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="{{url('confirmation')}}" class="bs-wizard-dot"></a>
            </div>  
                   
        </div>
    </div>
</section>

<div id="position">
    <div class="container">
        <ul>
            <li><a href="{{url()}}">Home</a></li>
            <li>Cart</li>
        </ul>
    </div>
</div>

<div class="container margin_60">
    <div class="row">
        <div class="col-md-8">
            <div class="form_title">
                <h3>Payment Information</h3>
                <p>
                    Mussum ipsum cacilds, vidis litro abertis.
                </p>
            </div>
        </div>
        
        <aside class="col-md-4">
        <div class="box_style_1">
            <h3 class="inner">- Summary -</h3>
            <table class="table table_summary">
            <tbody>
            <tr>
                <td>
                    Adults
                </td>
                <td class="text-right">
                    2
                </td>
            </tr>
            <tr>
                <td>
                    Children
                </td>
                <td class="text-right">
                    0
                </td>
            </tr>
            <tr>
                <td>
                    Dedicated tour guide
                </td>
                <td class="text-right">
                    $34
                </td>
            </tr>
            <tr>
                <td>
                    Insurance
                </td>
                <td class="text-right">
                    $34
                </td>
            </tr>
            <tr class="total">
                <td>
                    Total cost
                </td>
                <td class="text-right">
                    $154
                </td>
            </tr>
            </tbody>
            </table>
            <a href="{{url('confirmation')}}" class="btn_full">Book Now</a>
        </div>
        <div class="box_style_4">
            <i class="icon_set_1_icon-57"></i>
            <h4>Need <span>Help?</span></h4>
            <a href="tel://004542344599" class="phone">+45 423 445 99</a>
            <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
        </aside><!-- End aside -->

    </div><!--End row -->
</div>

@stop