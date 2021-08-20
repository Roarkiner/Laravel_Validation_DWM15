@extends('layout/base')

@section('css')
    <link rel="stylesheet" href="../assets/css/char_list_of_draw.css">
@endsection
@section('script')@endsection

@section('title')
    Liste des personnages de {{ $drawer->name }}
@endsection

@section('content')
    <h1>Liste des personnages de {{ $drawer->name }}</h1>
    @if (count($drawer->characters) === 0)
        <p id='empty-list'>Il n'y a pas encore de personnage relié à ce dessinateur...pourquoi ne pas en <a href="/characters/add_form?id={{ $drawer->id }}">ajouter un?</a></p>
    @else
        <ul id='characters-list'>
            @foreach ($drawer->characters as $character)
                <li>{{ $character->name }}</li>
            @endforeach
        </ul>
    @endif
    <a id='redirect' href="{{ url()->previous() }}">Retourner à la liste</a>
@endsection