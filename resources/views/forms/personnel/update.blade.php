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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Elements</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Basic Elements</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                       

                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Form row</h4>
                                        <p class="text-muted font-13">
                                            v class="alert alert-danger">{{ $errors->first() }}</div>
                                        @endifYou may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                        </p>
                                        @if ($errors->any())
                                            <di

                                        @if (\Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label for="inputnom_personnel" class="col-form-label">Nom du Personnel</label>
                                                    <input type="text" class="form-control" id="inputnom_departement" placeholder="Nom du departement">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label for="inputFonction" class="col-form-label">Fonction</label>
                                                    <input type="text" class="form-control" id="inputFonction" placeholder="Fonction">
                                                </div>
                                                
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="inputLogin" class="col-form-label">Login</label>
                                                    <input type="text" class="form-control" id="inputLogin" placeholder="Login">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputPassword" class="col-form-label">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary waves-effect waves-light">MODIFIER</button>
                                            <button type="reset" class="btn btn-primary waves-effect waves-light">Annuler</button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

@endsection