@extends('layouts.master')

@section('css')
        <!-- Plugins css-->
        <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

                        <h3 class="page-title">Les états géneraux</h3>
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                                <i class="icon-people font-22 avatar-title text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1">Total etudiant(s)</p>
                                                <h3 class="text-dark mt-1"><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ $etu }}</span></h3>
                                                
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-secondary border-secondary border">
                                                <i class="icon-list font-22 avatar-title text-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1">Total des matieres(s)</p>
                                                <h3 class="text-dark mt-1"><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ $mat }}</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-blue border-blue border">
                                                <i class="icon-user-follow font-22 avatar-title text-blue mdi-24px"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1 ">Total personnel(s)</p>
                                                <h3 class="text-dark mt-1"><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ $per }}</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-pink border-pink border">
                                                <i class="icon-grid font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1">Total Departement(s)</p>
                                                <h3 class="text-dark mt-1"><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ $dep }}</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                       <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h3>Les états de votre Département</h3>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="icon-people font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                       <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1">Nombre d'etudiant(s)</p>
                                                <h3 class="text-dark mt-1"><span  data-plugin="counterup">{{ Auth::user()->departement->inscrires->count() }}</span></h3>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">Pourcentage <span class="float-right">
                                            {{ Auth::user()->departement->inscrires->count()*"$etu"/100 }}% </span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:{{ Auth::user()->departement->inscrires->count() }}%">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-4">
                                <div class="card-box">
                                     <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                                <i class=" icon-user-follow font-22 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1">Nombre de personnel(s)</p>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ Auth::user()->departement->personnels->count() }}</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">Pourcentage  <span class="float-right">{{ Auth::user()->departement->personnels->count()*"$per"/100 }}%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-success" role="progressbar"  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: {{ Auth::user()->departement->personnels->count()*$per/100 }}%">
                                               <span class="sr-only">{{ Auth::user()->departement->personnels->count()*"$per"/100 }}% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-4">
                                <div class="card-box">
                                     <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                                <i class=" icon-user-follow font-22 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1">Nombre d'ulisateur(s)</p>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $per }}</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">Pourcentage  <span class="float-right">{{ $per*$per/100 }}%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: {{$per*$per/100 }}%">
                                                <span class="sr-only">{{$per*$per/100 }}% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                    </div> <!-- container -->

@endsection

@section('script')

        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/peity/peity.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jquery-sparkline/jquery-sparkline.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jquery-scrollto/jquery-scrollto.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Chat js -->
        <script src="{{ URL::asset('assets/js/pages/jquery.chat.js')}}"></script>

        <!-- TODO js-->
        <script src="{{ URL::asset('assets/js/pages/jquery.todo.js')}}"></script>

        <!-- Widgets demo js-->
        <script src="{{ URL::asset('assets/js/pages/widgets.init.js')}}"></script>

@endsection