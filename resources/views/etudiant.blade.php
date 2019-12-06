@extends('layouts.master')

@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                        <a href="{{ route('etudiants.create') }}" class="btn btn-success mb-20">
                                            AJOUTER UN ETUDIANT
                                        </a>
                                        
                                    <br><br>

                                    @foreach($l as $licence)
                                        <h4 class="header-title">Etudiant de la {{ $licence->nom }}</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                <tr>
                                                    <th>Matricule</th>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>Adresse e-mail</th>
                                                     <th>Telephone</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($licence->inscrires()->where('id_departement', Auth::user()->departement->id_departement)->get() as $insctiption)
                                                        <tr>
                                                            <td>{{ $insctiption->etudiant->matricule }}</td>
                                                            <td>{{ $insctiption->etudiant->nom }}</td>
                                                            <td>{{ $insctiption->etudiant->prenom }}</td>
                                                            <td>{{ $insctiption->etudiant->email }}</td>
                                                            <td>{{ $insctiption->etudiant->telephone }}</td>
                                                            <td class="text-right">
                                                                <a href="{{ route('etudiants.edit', $insctiption->etudiant->matricule) }}" class="btn btn-info">Modifier</a>
                                                                <a href="{{ route('etudiants.destroy', $insctiption->etudiant->matricule) }}" class="btn btn-danger btn-delete">Supprimer</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>        
                                        </div> <!-- end .table-responsive-->
                                        <br><br>
                                    @endforeach

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
        
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card-box -->
                </div> <!-- end col -->
            </div>
                        <!--- end row -->        
                        
        </div> <!-- container -->

        <input type="hidden" name="message-suppression" value="Voulez vous supprimer cette inscription ?">

@endsection