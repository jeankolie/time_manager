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
                                        <h4 class="header-title">Modifier l'etudiant dans les champs ci-apres</h4>
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
                                        
                                        <form action="{{ route('etudiants.update', $etudiant->id_etudiant) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="etudiant" value="{{ $etudiant->id_etudiant }}">
                                            <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputNom_personnel" class="col-form-label">Matricule</label>
                                                        <input type="text" class="form-control" name="matricule" value="{{ old('matricule') ?? $etudiant->matricule }}">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputLogin" class="col-form-label">Nom</label>
                                                        <input type="text" class="form-control" name="nom" value="{{ old('nom') ?? $etudiant->nom }}">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputLogin" class="col-form-label">Prenom</label>
                                                        <input type="text" class="form-control" name="prenom" value="{{ old('prenom') ?? $etudiant->prenom }}">
                                                    </div>
                                                    
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label class="col-form-label">licence</label>
                                                        <select class="form-control" name="licence">
                                                            @foreach($licences as $licence)
                                                                @if($licence->id_licence == $etudiant->inscrires->last()->licence->id_licence)
                                                                    <option selected value="{{ $licence->id_licence }}">{{ $licence->nom }}</option>
                                                                @else
                                                                    <option value="{{ $licence->id_licence }}">{{ $licence->nom }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="col-form-label">Annee</label>
                                                        <select class="form-control" name="annee">
                                                            @foreach($annees as $annee)
                                                                @if($annee->id_annee == $etudiant->inscrires->last()->annee->id_annee)
                                                                    <option selected value="{{ $annee->id_annee }}">{{ $annee->nom }}</option>
                                                                @else
                                                                    <option value="{{ $annee->id_annee }}">{{ $annee->nom }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                        
                                                </div>
                                            
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">MODIFFIER L'ETUDIANT</button>
                                            <button type="reset" class="btn btn-primary waves-effect waves-light">Annuler</button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end card-box -->
                </div> <!-- end col -->
        
            </div> <!-- end table-responsive-->

@endsection