<!DOCTYPE html>
<html lang="en">

<head>

    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')

</head>

@include('html.layouts.main')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Google Chart</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Chart</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Google Chart</a></li>
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
                            <!-- [ google-chart ] start -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Area Chart</h5>
                                    </div>
                                    <div class="card-block  text-center">
                                        <div id="chart-google-area" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Stacking Area Chart</h5>
                                    </div>
                                    <div class="card-block  text-center">
                                        <div id="chart-google-stacking" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Bar Chart</h5>
                                    </div>
                                    <div class="card-block  text-center">
                                        <div id="chart-google-bar" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Bubble Chart</h5>
                                    </div>
                                    <div class="card-block  text-center">
                                        <div id="chart-google-bubble" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Candlestick Chart</h5>
                                    </div>
                                    <div class="card-block  text-center">
                                        <div id="chart-google-Candlestick" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Waterfall Chart</h5>
                                    </div>
                                    <div class="card-block  text-center">
                                        <div id="chart-google-Waterfall" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Combo Chart</h5>
                                    </div>
                                    <div class="card-block text-center">
                                        <div id="chart-google-Combo" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Donut Chart</h5>
                                    </div>
                                    <div class="card-block">
                                        <div id="chart-google-Donut" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Exploading A Slice Chart</h5>
                                    </div>
                                    <div class="card-block">
                                        <div id="chart-google-Exploading" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Slice Visibility Threshold Chart</h5>
                                    </div>
                                    <div class="card-block">
                                        <div id="chart-google-Threshold" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ google-chart ] end-->
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

@include('html.layouts.footer')
<!-- google chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="assets/js/pages/chart-google-custom.js"></script>
@include('html.layouts.footer-bottom-link')

</body>

</html>
