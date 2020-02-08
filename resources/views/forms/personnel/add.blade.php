@extends('layouts.master')

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Ajouter un personnel a votre a votre department</h4>
                                        <br><br>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">{{ $errors->first() }}</div>
                                        @endif

                                        @if (\Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif
                                        
                                        <form action="{{ route('personnels.store', ['departement' => $departement->slug]) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="departement" value="{{ $departement->id_departement }}">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputNom_personnel" class="col-form-label">Nom du Personnel</label>
                                                    <input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputLogin" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" name="login" value="{{ old('login') }}">
                                                </div>
                                                
                                            </div>

                                            <button type="submit" class="btn btn-primary waves-effect waves-light">CREER LE PERSONNEL</button>
                                            <button type="reset" class="btn btn-primary waves-effect waves-light">Annuler</button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

@endsection