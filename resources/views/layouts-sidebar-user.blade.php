@extends('layouts.master-layouts')

@section('css')
        <!-- Plugins css-->
        <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('body')
    <body>
@endsection

@section('topbar-sidebar')
    @include('layouts.topbar')
    @include('layouts.left-sidebar-user')
@endsection

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                            <li class="breadcrumb-item active">Sidebar with User</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Sidebar with User</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Income Status</h4>
                                    <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">31,570</span></h2>
                                    <p class="text-muted mb-0">Total income: $22506 <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>10.25%</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Sales Status</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">683</span></h2>
                                    <p class="text-muted mb-0">Total sales: 2398 <span class="float-right"><i class="fa fa-caret-down text-danger mr-1"></i>7.85%</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Recent Users</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">3.2</span>M</h2>
                                    <p class="text-muted mb-0">Total users: 121 M <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>3.64%</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Total Revenue</h4>
                                    <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">68,541</span></h2>
                                    <p class="text-muted mb-0">Total revenue: $1.2 M <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>17.48%</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-right d-none d-md-inline-block">
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-xs btn-secondary">Today</button>
                                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Revenue</h4>
                                        <div class="row mt-4 text-center">
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$7.8k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                <h4><i class="fe-arrow-up text-success mr-1"></i>$1.4k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$15k</h4>
                                            </div>
                                        </div>
                                        <div class="mt-3 chartjs-chart">
                                            <canvas id="line-chart-example" height="300"></canvas>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-right d-none d-md-inline-block">
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-xs btn-secondary">Today</button>
                                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Projections Vs Actuals</h4>
                                        <div class="row mt-4 text-center">
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$3.8k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                <h4><i class="fe-arrow-up text-success mr-1"></i>$1.1k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$25k</h4>
                                            </div>
                                        </div>
                                        <div class="mt-3 chartjs-chart">
                                            <canvas id="bar-chart-example" height="300"></canvas>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <!-- INBOX -->
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Inbox</h4>

                                    <div class="inbox-widget slimscroll" style="max-height: 404px;">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Tomaslau</p>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">
                                                <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                            </p>
                                        </div>
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">
                                                <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                            </p>
                                        </div>
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text">Nice to meet you</p>
                                            <p class="inbox-item-date">
                                                <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                            </p>
                                        </div>

                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Shahedk</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">
                                                <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                            </p>
                                        </div>
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Adhamdannaway</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">
                                                <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                            </p>
                                        </div>

                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">
                                                <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                            </p>
                                        </div>
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text">Nice to meet you</p>
                                            <p class="inbox-item-date">
                                                <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                            </p>
                                        </div>
                                    </div> <!-- end inbox-widget -->

                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                            <!-- CHAT -->
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Chat</h4>

                                    <div class="chat-conversation">
                                        <ul class="conversation-list slimscroll" style="max-height: 350px;">
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/user-5.jpg" alt="male">
                                                    <i>10:00</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Hello!
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/user-1.jpg" alt="Female">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Geneva</i>
                                                        <p>
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/user-5.jpg" alt="male">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Yeah everything is fine
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/user-1.jpg" alt="male">
                                                    <i>10:02</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Geneva</i>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-danger chat-send btn-block waves-effect waves-light">Send</button>
                                            </div>
                                        </div>
                                    </div> <!-- .chat-conversation -->
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->

                            <!-- Todos app -->
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Todo</h4>
                                    <div class="todoapp">
                                        <div class="row">
                                            <div class="col">
                                                <h5 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h5>
                                            </div>
                                            <div class="col-auto">
                                                <a href="" class="float-right btn btn-light btn-xs waves-effect waves-light" id="btn-archive">Archive</a>
                                            </div>
                                        </div>

                                        <ul class="list-group list-group-flush slimscroll todo-list" style="max-height: 330px" id="todo-list"></ul>

                                        <form name="todo-form" id="todo-form">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- .todoapp -->
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!-- Chart JS -->
        <script src="{{ URL::asset('assets/libs/chart-js/chart-js.min.js')}}"></script>

        <script src="{{ URL::asset('assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jquery-scrollto/jquery-scrollto.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Chat app -->
        <script src="{{ URL::asset('assets/js/pages/jquery.chat.js')}}"></script>

        <!-- Todo app -->
        <script src="{{ URL::asset('assets/js/pages/jquery.todo.js')}}"></script>

        <!-- Dashboard init JS -->
        <script src="{{ URL::asset('assets/js/pages/dashboard-3.init.js')}}"></script>

@endsection