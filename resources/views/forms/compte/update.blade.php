@extends('layouts.master')

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Form row</h4>
                                        <p class="text-muted font-13">
                                            v class="alert alert-danger">{{ $errors->first() }}</div>
                                        @endifYou may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>
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
                                                    <label for="inputEmail4" class="col-form-label">Nom du Departement</label>
                                                    <input type="text" class="form-control" id="inputnom_departement" placeholder="Nom du departement">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label for="inputResponsable" class="col-form-label">Responsable</label>
                                                    <input type="text" class="form-control" id="inputResponsable" placeholder="Responsable">
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
                                                <div class="form-group col-md-3">
                                                    <label for="inputState" class="col-form-label">Nombre de departements</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choisissez</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
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