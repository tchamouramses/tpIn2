@extends('layouts.app')

@section('content')
    <div class="container" id="main">
        <div class="card">
            <div class="card-header">
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <h4 style="color: black">Liste des Cours</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('cour.create') }}" class="btn btn-success" style="float: right">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>Nom</th>
                            <th>Filiere</th>
                            <th>description</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($cours as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->filiere->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <button class="btn btn-danger">
                                            supprimer
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        <div class="text-center">
                                            Aucun Cour Pour le moment
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $cours->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
