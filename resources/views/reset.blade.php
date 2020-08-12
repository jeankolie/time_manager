@extends('layouts.master-without-nav')

@section('body')
    <body class="authentication-bg">
@endsection

@section('content')

        <div class="mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="text-center">

                            <h3 class="mt-4">{{ __('Nouveau mot de passe pour :email', ['email' => $email]) }}</h3>
                            <h2>{{ $otp }}</h2>
                            <a href="/" class="btn btn-primary mt-4">
                                {{ __('Terminer') }}
                            </a>
                        </div> <!-- end /.text-center-->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2020 - {{date('Y')}} &copy; Tobi <a href="" class="text-body">Time manager</a> 
        </footer>
    
@endsection


@section('script')
        <!-- Plugins js-->
        <script src="{{ URL::asset('assets/libs/jquery-countdown/jquery-countdown.min.js')}}"></script>

        <!-- Countdown js -->
        <script src="{{ URL::asset('assets/js/pages/coming-soon.init.js')}}"></script>    
@endsection
