@extends('layouts.master')

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                          <br><br>
                            <a href="{{ route('emplois.create') }}" class="btn btn-success mb-20">AJOUTER UN EMPLOIS DU TEMPS</a>
                      </p><br>
                      @include('layouts.tab', ['licences' => Auth::user()->departement->licences])
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end table-responsive-->
    </div> <!-- end card-box -->
@endsection
