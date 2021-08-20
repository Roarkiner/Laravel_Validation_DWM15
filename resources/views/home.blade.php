@extends('layout/base')

@section('css')
    <link rel="stylesheet" href="assets/css/home.css">
@endsection
@section('script')@endsection

@section('title')
    Accueil
@endsection

@section('content')
    <h1>Bienvenue !</h1>
    <h2>Ici nous parlons de personnages de bande dessinées.</h2>
    <p>Ce site est fait pour pouvoir répertorier les personnages de bande dessinées et leurs dessinateurs.</p>
    <figure>
        <img src="/assets/img/spirou.gif" alt="Spirou qui fait coucou">
    </figure>
    <figcaption>Bonne navigation !</figcaption>
@endsection