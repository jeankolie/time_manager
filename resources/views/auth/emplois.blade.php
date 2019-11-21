@extends('layouts.master-without-nav')

@section('body')
    <body class="authentication-bg authentication-bg-pattern">
@endsection

@section('content')

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="text-center">Departement: {{ $departement->nom }}</h4>
                            <h5 class="text-center">Responsable: {{ $departement->responsable }}</h5>
                            @include('layouts.tab', ['licences' => $licence])

                            <h3 class="text-center">
                                <a class="btn btn-success" href="{{ route('login') }}">
                                    James Carter
                                </a>
                            </h3>
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            {{date('Y')}} &copy; <a href="" class="text-white-50">Tobi</a> 
        </footer>
@endsection
