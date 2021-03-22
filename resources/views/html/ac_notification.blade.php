<!DOCTYPE html>
<html lang="en">

<head>

    @include('html.layouts.head')
    <!-- notification css -->
    <link rel="stylesheet" href="assets/plugins/notification/css/notification.min.css">
    @include('html.layouts.head-bottom-link')

</head>

@include('html.layouts.main')

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Notification</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Advance Components</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Notification</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!-- [ notification-alert ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Notification Alert</h5>
                                    </div>
                                    <div class="card-block">
                                        <p>Notification color : <code> data-type="inverse"</code> Notification position : <code> data-align="left" </code></p>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-from="top" data-align="left" data-notify-icon="feather icon-bell">Top Left</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-from="top" data-align="right" data-notify-icon="feather icon-layers">Top Right</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-from="top" data-align="center" data-notify-icon="feather icon-shopping-cart">Top Center</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-from="bottom" data-align="left">Bottom Left</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-from="bottom" data-align="right">Bottom Right</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-from="bottom" data-align="center">Bottom Center</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Notification Position</h5>
                                    </div>
                                    <div class="card-block">
                                        <p>Change data-type : <code> data-type="inverse"</code> to change notification color</p>
                                        <button class="btn notifications btn-inverse" data-type="inverse" data-from="top" data-align="right" data-notify-icon="feather icon-bell">Inverse</button>
                                        <button class="btn notifications btn-primary" data-type="primary" data-from="top" data-align="right" data-notify-icon="feather icon-layers">Primary</button>
                                        <button class="btn notifications btn-info" data-type="info" data-from="top" data-align="right" data-notify-icon="feather icon-shopping-cart">Info</button>
                                        <button class="btn notifications btn-success" data-type="success" data-from="top" data-align="right">success</button>
                                        <button class="btn notifications btn-warning" data-type="warning" data-from="top" data-align="right">Warning</button>
                                        <button class="btn notifications btn-danger" data-type="danger" data-from="top" data-align="right">Danger</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Notification Behaviour</h5>
                                    </div>
                                    <div class="card-block">
                                        <p>use code <code>data-animation-in="animated fadeIn" data-animation-out="animated fadeOut"</code> notification animation effect</p>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated fadeIn" data-animation-out="animated fadeOut">Fade In</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated fadeInLeft" data-animation-out="animated fadeOutLeft">Fade In Left</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated fadeInRight" data-animation-out="animated fadeOutRight">Fade In Right</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated fadeInUp" data-animation-out="animated fadeOutUp">Fade In Up</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated fadeInDown" data-animation-out="animated fadeOutDown">Fade In Down</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated bounceIn" data-animation-out="animated bounceOut">Bounce In</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated bounceInLeft" data-animation-out="animated bounceOutLeft">Bounce In Left</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated bounceInRight" data-animation-out="animated bounceOutRight">Bounce In Right</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated rotateInDownRight" data-animation-out="animated rotateOutUpRight">Fall In Right</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated rotateIn" data-animation-out="animated rotateOut">Rotate In</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated flipInX" data-animation-out="animated flipOutX">Flip In X</button>
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated flipInY" data-animation-out="animated flipOutY">Flip In Y</button>
                                    </div>
                                </div>
                            </div>
                            <!-- [ notification-alert ] end -->
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ Main Content ] end -->

@include('html.layouts.footer')
<!-- notification Js -->
<script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>
<script src="assets/js/pages/ac-notification.js"></script>
@include('html.layouts.footer-bottom-link')

</body>

</html>
