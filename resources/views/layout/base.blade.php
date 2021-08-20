<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/png">
    @yield('css')
    @yield('script')
    <title>@yield('title')</title>
</head>
<body>
    <div id='left-side' class='sider'></div>
    <div id='right-side' class='sider'></div>
    <div id='main-page'>
        <header>
            <nav>
                <ul id="nav-list">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/characters/list">Personnages</a></li>
                    <li><a href="/drawers/list">Dessinateurs</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer><p>Lénaïc Dujour tous droits reservés (pas vraiment mais ça fait joli)</p></footer>
    </div>
</body>
</html>