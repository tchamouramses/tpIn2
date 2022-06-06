@extends('layouts.app')

@section('content')
    <div class="container" id="main">
        <div class="card">
            <div class="card-header">
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <h4>Details Sur Mr {{ $student->name }}</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Nom</th>
                                <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <th>Telephone</th>
                                <td>{{ $student->phone }}</td>
                            </tr>
                            <tr>
                                <th>Date De Naissance</th>
                                <td>{{ $student->birthdate }}</td>
                            </tr>
                            <tr>
                                <th>Filiere</th>
                                <td>{{ $student->filiere->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
