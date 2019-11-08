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
                                        <h4 class="header-title">Ajouter un departement</h4>
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

                                        <form method="POST" action="{{ route('departements.store') }}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail4" class="col-form-label">Nom du Departement</label>
                                                    <input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputResponsable" class="col-form-label">Responsable</label>
                                                    <input type="text" class="form-control" name="responsable" value="{{ old('responsable') }}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="col-form-label">Nombre de licence</label>
                                                    <select class="form-control" name="licence">
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="text-muted font-13 mt-3 mb-2">Choisissez les matieres</p>

                                                    @foreach($matieres as $matiere)
                                                        <div class="checkbox checkbox-success form-check-inline">
                                                            <input type="checkbox" name="matiere[]" value="{{ $matiere->id_matiere }}">
                                                            <label> {{ $matiere->nom }} </label>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">CREER</button>
                                                    <button type="reset" class="btn btn-primary waves-effect waves-light">Annuler</button>
                                                </div>
                                            </div>
                                            

                                            
                                            

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

@endsection