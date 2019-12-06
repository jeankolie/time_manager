@extends('layouts.master')

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Ajouter un etudiant dans les champ ci-apres</h4>
                                            <br>

                                            @if ($errors->any())
                                                <div class="alert alert-danger">{{ $errors->first() }}</div>
                                            @endif

                                            @if (\Session::has('success'))
                                                <div class="alert alert-success">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif
                                            
                                            <form action="{{ route('etudiants.store') }}" method="POST">
                                                @csrf
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputNom_personnel" class="col-form-label">Matricule</label>
                                                        <input type="text" class="form-control" name="matricule" value="{{ old('matricule') }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputLogin" class="col-form-label">Nom</label>
                                                        <input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputLogin" class="col-form-label">Prenom</label>
                                                        <input type="text" class="form-control" name="prenom" value="{{ old('prenom') }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputLogin" class="col-form-label">Adresse e-mail</label>
                                                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                                    </div>
                                                    
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword" class="col-form-label">Telephone</label>
                                                        <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="col-form-label">licence</label>
                                                        <select class="form-control" name="licence">
                                                            @foreach($licences as $licence)
                                                                <option value="{{ $licence->id_licence }}">{{ $licence->nom }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="col-form-label">Annee</label>
                                                        <select class="form-control" name="annee">
                                                            @foreach($annees as $annee)
                                                                <option value="{{ $annee->id_annee }}">{{ $annee->nom }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                      
                                                </div>

                                                
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">CREER L'ETUDIANT</button>
                                                <button type="reset" class="btn btn-primary waves-effect waves-light">Annuler</button>

                                            </form>

                                        </div> <!-- end card-body -->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                        <!-- end row -->

@endsection