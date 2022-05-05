@extends('layouts.app')

@section('content')
    <div class="container" id="main">
        <div class="card">
            <div class="card-header">
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <h4>Liste des etudiants</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="#!" class="btn btn-success" style="float: right">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>Date Naissance</th>
                            <th>Nom</th>
                            <th>Filiere</th>
                            <th>Note</th>
                        </thead>
                        <tbody>
                            @forelse ($students as $item)
                                <tr>
                                    <td> {{ $item->birthdate }} </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->filiere->name }} </td>
                                    <td>
                                        <input type="number" min="0" max="20" class="form-control"
                                            id="{{ $item->id }}" oninput="control({{ $item->id }})">
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="4">
                                        <div class="text-center">
                                            Aucun Etudiant Pour le moment
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $students->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function control(id) {
            let input = document.getElementById(id);
            let value = input.value;
            if (value > 20) {
                value = 20;
            } else if (value < 0) {
                value = 0;
            }
            input.value = value;
        }
    </script>
@endsection
