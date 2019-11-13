@extends('layouts.master')

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                                           
                        <h4 class="page-title">Modifier cette annee scolaire dans les champs ci-apres</h4>
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">

                                        @if ($errors->any())
                                            <div class="alert alert-danger">{{ $errors->first() }}</div>
                                        @endif

                                        @if (\Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('annees.update', $annee->id_annee) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{ $annee->id_annee }}">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4" class="col-form-label">Nom de l'annee:</label>
                                                    <input type="text" class="form-control" name="nom" value="{{ old('nom') ?? $annee->nom }}">
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