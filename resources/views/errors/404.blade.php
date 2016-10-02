@extends('layout.app')

@section('title')Page non trouvée
@endsection

@section('description')Page non trouvée
@endsection

@section('content')
    <style>
        body {
            font-family: monospace;
            font-size: 16px;
            background: #f9a717;
            color: #666;
            margin: 0;
        }
        img {
            display: block;
            width: 100%;
        }

        .container {
            position: relative;
            max-width: 800px;
            margin: 0 auto 5%;
            padding: 5%;
            text-align: center;
            color: #fff;
        }

        .container h1 {
            font-weight: normal;
            font-size: 24px;
            margin-bottom: 2em;
        }

        .container a.btn {
            border: 3px solid #fff;
            border-radius: 2em;
            padding: 10px 30px;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
        }

        .container a.btn.search {
            border-radius: 0 2em 2em 0;
        }

        .container a.btn:hover {
            background-color: #fff;
            color: #d88705;
        }
        .scene {
            padding: 0;
            margin: 0;
        }
    </style>
    <div id="container" class="container">
        <ul id="scene" class="scene">
            <li class="layer" data-depth="1.00"><img src="images/error/404-01.png" alt=""></li>
            <li class="layer" data-depth="0.60"><img src="images/error/shadows-01.png" alt=""></li>
            <li class="layer" data-depth="0.20"><img src="images/error/monster-01.png" alt=""></li>
            <li class="layer" data-depth="0.40"><img src="images/error/text-01.png" alt=""></li>
            <li class="layer" data-depth="0.10"><img src="images/error/monster-eyes-01.png" alt=""></li>
        </ul>
        <h1>Opps! Ce monstre a mangé la page!</h1>

        <a class="btn" href="{{ route('home') }}">Retour à l'accueil</a>

    </div>
    <script src="js/parallax.min.js"></script>
    <script>// <![CDATA[
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
        // ]]></script>
@endsection