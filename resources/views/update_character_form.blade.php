@extends('layout/base')

@section('css')
    <link rel="stylesheet" href="../assets/css/form.css">
@endsection

@section('script')
    <script src="../assets/js/form.js" type="text/javascript" defer></script>
@endsection

@section('title', 'Modifier un personnage')

@section('content')
    <h1>Modifier un personnage</h1>
    <br>
    <form action="/characters/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $character->id }}">
        <div>
            <label for="name">Nom : </label>
            <input @error('name') {{ 'class=input_error' }} @enderror type="text" name="name" id="name" value='{{ $character->name }}' required>
            @error('name')
                <p class="error">{{ $errors->first('name') }}</p>
            @enderror
        </div>

        <div>
            <label for="creation_year">Année de création : </label>
            <input @error('creation_year') {{ 'class=input_error' }} @enderror type="number" name="creation_year" id="creation_year" value='{{ $character->creation_year }}' min="1500" max="{{ date('Y'); }}" value="{{ date('Y'); }}" required>
            @error('creation_year')
                <p class="error">{{ $errors->first('creation_year') }}</p>
            @enderror
        </div>

        <div>
            <label for="bd">BD associée : </label>
            <input @error('bd') {{ 'class=input_error' }} @enderror type="text" name="bd" id="bd" value='{{ $character->bd }}' required>
            @error('bd')
                <p class="error">{{ $errors->first('bd') }}</p>
            @enderror
        </div>

        <div>
            <label for="drawer">Dessinateur : </label>
            <select @error('drawer_id') {{ 'class=input_error' }} @enderror name="drawer_id" id="drawer" required>
                @foreach ($drawers as $drawer)
                    @if ($drawer->id === $character->drawer->id)
                        <option value="{{ $drawer->id }}" selected>{{ $drawer->name }}</option>
                    @else
                        <option value="{{ $drawer->id }}">{{ $drawer->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('drawer_id')
                <p class="error">{{ $errors->first('drawer_id') }}</p>
            @enderror
        </div>

        <br>
        <input type="submit" value="Modifier un personnage">
    </form>
    <a href="/characters/list" id="back-to-list-button">Retouner à la liste</a>
@endsection