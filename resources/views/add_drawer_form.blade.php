@extends('layout/base')

@section('css')
    <link rel="stylesheet" href="../assets/css/form.css">
@endsection

@section('script')
    <script src="../assets/js/form.js" type="text/javascript" defer></script>
@endsection

@section('title', 'Ajouter un dessinateur')

@section('content')
    <h1>Ajouter un dessinateur</h1>
    <br>
    <form action="/drawers/add" method="post">
        @csrf
        <div>
            <label for="name">Nom : </label>
            <input @error('name') {{ 'class=input_error' }} @enderror type="text" name="name" id="name" required>
            @error('name')
                <p class="error">{{ $errors->first('name') }}</p>
            @enderror
        </div>

        <div>
            <label for="birth_year">Année de naissance : </label>
            <input @error('birth_year') {{ 'class=input_error' }} @enderror type="number" name="birth_year" id="birth_year" min="1500" max="{{ date('Y'); }}" value="{{ date('Y'); }}" required>
            @error('birth_year')
                <p class="error">{{ $errors->first('birth_year') }}</p>
            @enderror
        </div>

        <div>
            <label for="nationality">Nationalité : </label>
            <input @error('nationality') {{ 'class=input_error' }} @enderror type="text" name="nationality" id="nationality" required>
            @error('nationality')
                <p class="error">{{ $errors->first('nationality') }}</p>
            @enderror
        </div>

        <br>
        <input type="submit" value="Ajouter un dessinateur">
    </form>
    <a href="/drawers/list" id="back-to-list-button">Retouner à la liste</a>
@endsection