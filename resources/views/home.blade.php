@extends('layouts.master')

@section('css')
        <!-- Plugins css-->
        <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h3>Les statistiques de votre Departement</h3>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fe-heart font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1">Nombre d'etudiant(s)</p>
                                                <h3 class="text-dark mt-1"><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ Auth::user()->departement->inscrires->count() }}</span></h3>  
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                                <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1">Nombres de matieres</p>
                                                <h3 class="text-dark mt-1"><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ Auth::user()->departement->matieres->count() }}</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                                <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1">Nombre de personnel(s)</p>
                                                <h3 class="text-dark mt-1"><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ Auth::user()->departement->personnels->count() }}</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                    </div>
                    <!-- end row-->

                    <div class="row">
                            <div class="col-12">
                                <div class="card-box widget-inline">
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-2 text-center">
                                                <p class="text-muted font-15 mb-0">Nombre d'etudiant(s) connecter</p>
                                                <i class="mdi mdi-cart-plus text-primary mdi-24px"></i>
                                                <h3><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ Auth::user()->$etu }}</span></h3>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-2 text-center">
                                                <p class="text-muted font-15 mb-0">Nombre de personnel(s) connecter</p>
                                                <i class="mdi mdi-currency-usd text-success mdi-24px"></i>
                                                <h3><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ Auth::user()->$per }}</span></h3>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-2 text-center">
                                                <p class="text-muted font-15 mb-0">Total utilisateur(s)</p><br>
                                                <i class="mdi mdi-account-group text-danger mdi-24px"></i>
                                                <h3><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ Auth::user()->count() }}</span></h3>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-2 text-center">
                                                <p class="text-muted mb-1">Nombre de salle(s)</p><br>
                                                <i class="mdi mdi-eye-outline text-blue mdi-24px"></i>
                                                <h3 class="text-dark mt-1"><span class="badge badge-success badge-pill-right" data-plugin="counterup">{{ $sal }}</span></h3>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>     
                        <!-- end row-->

                        <h3 class="page-title">Les statistiques generales</h3>
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                                <i class="fe-shopping-bag font-22 avatar-title text-danger"></i>
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
                                                <i class="fe-gitlab font-22 avatar-title text-secondary"></i>
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
                                                <i class="fe-gift font-22 avatar-title text-blue"></i>
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
                                                <i class="fe-users font-22 avatar-title text-pink"></i>
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