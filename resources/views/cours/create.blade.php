@extends('layouts.app')

@section('content')
    <div class="container" id="main">
        <div class="card">
            <div class="card-header">
                <h4 style="color: black">Ajout des etudiants</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('cour.store') }}">
                    @csrf
                    @include('cours.form')
                    <div class="mt-2">
                        <button type="submit" class="btn-default">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
