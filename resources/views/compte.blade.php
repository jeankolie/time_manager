@extends('layouts.master')

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Profile</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    <h4 class="mb-0">{{ $profil->nom }}</h4>
                                    <p class="text-muted">{{ $profil->login }}</p>

                                    <div class="text-left mt-3">
                                        <h4 class="font-13 text-uppercase">A propos de vous :</h4>
                                        <p class="text-muted mb-2 font-13">
                                            <strong>Nom complet :</strong> 
                                            <span class="ml-2">
                                                {{ $profil->nom }}
                                            </span>
                                        </p>
                                        <p class="text-muted mb-2 font-13"><strong>Login :</strong> <span class="ml-2 ">{{ $profil->login }}</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Departement :</strong><span class="ml-2">
                                            {{ $profil->departement->nom }}
                                        </span></p>

                                        
                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col-->

                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">
                                    <ul class="nav nav-pills navtab-bg nav-justified">
                                        <li class="nav-item">
                                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                Modifier mes informations
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
    

                                        <div class="tab-pane show active" id="settings">
                                            <form  method="POST" action="{{ route('mon-compte.update', Auth::user()->id_personnel) }}">
                                                @csrf
                                                @method('PUT')
                                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Information personnelle</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">Nom complet:</label>
                                                            <input type="text" class="form-control" id="firstname" placeholder="Enter first name" value="{{ $profil->nom }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastname">Login:</label>
                                                            <input type="text" class="form-control" id="lastname" placeholder="Enter last name" value="{{ $profil->login }}">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->


                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Modifier</button>
                                                </div>
                                            </form>

                                            <form>
                                               
                                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-lock mr-1"></i> Modifier mon mot de passe</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">Ancien mot de passe:</label>
                                                            <input type="password" class="form-control" id="firstname" placeholder="Enter first name">
                                                        </div>
                                                    </div>
                                                    
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastname">Nouveau mot de passe:</label>
                                                            <input type="password" class="form-control" id="lastname" placeholder="Enter last name">
                                                        </div>
                                                    </div> <!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastname">Confirmer nouveau mot de passe:</label>
                                                            <input type="password" class="form-control" id="lastname" placeholder="Enter last name">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->


                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Changer</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end settings content-->

                                    </div> <!-- end tab-content -->
                                </div> <!-- end card-box-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

@endsection