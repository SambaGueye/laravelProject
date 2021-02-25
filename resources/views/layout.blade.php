<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/clients/create">Clients</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/clients">Liste des clients</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/entreprises">Entreprises</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/a-propos">A propos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    @yield('content')
</div>
</body>
</html>