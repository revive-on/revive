<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cards</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;,
        height: 100 %;
            width: 100%;
            background-color: #d1d1d1
        }

        #mute {
            position: absolute;
        }

        #mute.on {
            opacity: 0.7;
            z-index: 1000;
            background: white;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body background="images/back.gif">
<div id="mute"></div>
<div id="app">
</div>
<p></p>
<audio controls autoplay loop>
    <source src="sound/trunks-theme.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<script src="js/app.js"></script>

</body>
</html>