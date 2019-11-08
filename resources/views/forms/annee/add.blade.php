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
                                    <h4 class="page-title">Ajouter une annee scolaire</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                       

                        <!-- Form row -->
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Saisissez l'annee scolaire dans le champ ci-dessous</h4>
                                        <p class="text-muted font-13">
                                            You may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>
                                        </p>

                                        @if ($errors->any())
                                            <div class="alert alert-danger">{{ $errors->first() }}</div>
                                        @endif

                                        @if (\Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('annees.store') }}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4" class="col-form-label">Nom de l'annee:</label>
                                                    <input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
                                                </div>

                                            </div>
                                           

                                            <button type="submit" class="btn btn-primary waves-effect waves-light">CREER</button>
                                            <button type="reset" class="btn btn-primary waves-effect waves-light">Annuler</button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

@endsection