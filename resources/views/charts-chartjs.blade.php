@extends('layouts.master')

@section('content')
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                            <li class="breadcrumb-item active">Chartjs</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Chartjs</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Line Chart</h4>
                                        <div class="mt-4 chartjs-chart">
                                            <canvas id="line-chart-example" height="350"></canvas>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bar Chart</h4>

                                        <div class="mt-4 chartjs-chart">
                                            <canvas id="bar-chart-example" height="350"></canvas>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Pie Chart</h4>

                                        <div class="mt-4 chartjs-chart">
                                            <canvas id="pie-chart-example" height="350" class="mt-4"></canvas>
                                        </div>
    
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Donut Chart</h4>
   
                                        <div class="mt-4 chartjs-chart">
                                            <canvas id="donut-chart-example" height="350"></canvas>
                                        </div>
    
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Polar area Chart</h4>

                                        <div class="mt-4 chartjs-chart">
                                            <canvas id="polar-chart-example" height="350"> </canvas>
                                        </div>
    
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Radar Chart</h4>

                                        <div class="mt-4 chartjs-chart">
                                            <canvas id="radar-chart-example" height="350"></canvas>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="header-title">Financial Report</h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <select id="type" class="form-control form-control-sm d-inline-block" style="max-width: 100px; min-height: 34px;">
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
                                                </select>
                                                <button id="update" class="btn btn-sm btn-primary ml-1">Update</button>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                    <canvas id="financial-report"></canvas>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!-- Moment js (financial demo only)-->
        <script src="{{ URL::asset('assets/libs/moment/moment.min.js')}}"></script>
        
        <!-- Chart JS -->
        <script src="{{ URL::asset('assets/libs/chart-js/chart-js.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{ URL::asset('assets/js/pages/chartjs.init.js')}}"></script>

@endsection