@extends('layout/base')

@section('css')
    <link rel="stylesheet" href="../assets/css/list.css">
@endsection
@section('script')
    <script src="../assets/js/list.js" type="text/javascript" defer></script>
@endsection

@section('title')
    Liste des dessinateurs
@endsection

@section('content')
    <h1>Liste des dessinateurs</h1>
    <div id='table-container'>
        @if (session()->exists('added'))
            <span class="status">{{ session('name') }} a été ajouté.</span>
            <br>
        @endif

        @if (session()->exists('deleted'))
            <span class="status">{{ session('name') }} a été supprimé.</span>
            <br>
        @endif

        @if (session()->exists('modified'))
            <span class="status">{{ session('name') }} a été modifié.</span>
            <br>
        @endif
        <table>
            <tr>
                <th>Nom</th>
                <th>Année de naissance</th>
                <th>Nationalité</th>
                <th>Suppr</th>
                <th>Modif</th>
            </tr>
            @foreach ($drawers as $drawer)
                <tr>
                    <td class='drawer-td'
                        data-birth="{{ $drawer->birth_year }}" 
                        data-nationality="{{ $drawer->nationality }}"
                        data-id="{{ $drawer->id }}"
                    >
                        {{ $drawer->name }}
                    </td>
                    <td>{{ $drawer->birth_year }}</td>
                    <td>{{ $drawer->nationality }}</td>
                    <td>
                        <form action="/drawers/delete" method="post">
                            @csrf
                            <input type="hidden" name="drawer_id" value="{{ $drawer->id }}">
                            <input class='delete-button' type="image" src="../assets/img/delete.svg" alt="Envoyer le formulaire">
                        </form>
                    </td>
                    <td>
                        <form action="/drawers/update_form" method="post">
                            @csrf
                            <input type="hidden" name="drawer_id" value="{{ $drawer->id }}">
                            <input class='update-button' type="image" src="../assets/img/update.svg" alt="Envoyer le formulaire">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="/drawers/add_form" id="add-button">Ajouter un dessinateur</a>
    </div>

    <div class='none background-dark fixed'></div>
    <div class='none drawer-detail fixed'>
        <img src="../assets/img/close.svg" alt="Close button" id="close-icon">
        <h2 id="name-detail"></h2>
        <p>Année de naissance : <span id="birth-detail"></span></p>
        <p>Nationalité : <span id="nationality-detail"></span></p>
        <a id="wikipedia-detail" href="" target="blank"><img src="../assets/img/wikipedia.svg" alt="Wikipedia"><p>Aller à la page wikipedia</p></a>
        <form action="/drawers/list_characters" method="post">
            @csrf
            <input id="list-detail" type="hidden" name="drawer_id">
            <input type="submit" value="Liste de ses personnages">
        </form>
    </div>
@endsection