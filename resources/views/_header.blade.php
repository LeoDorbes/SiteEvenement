<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet">

    <title>Projet Evenement</title>
</head>
<body>

<div class="row">
    <div class="header col-md-8 col-md-offset-2">
        <li>
            <ul><a href="{{route('home')}}"> Home </a></ul>
            <ul><a href="{{route('registration')}}"> Inscription </a></ul>
            <ul></ul>
            <ul></ul>
        </li>
    </div>
</div>

@yield('content')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</body>


</html>
