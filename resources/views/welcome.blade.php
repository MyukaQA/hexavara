<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skill Tes Hexavara</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/landing/style.css')}}">
</head>
<body>
    <div id="container" style="background-image: url({{asset('img/bg.jpg')}})">
        <div id="profilecontainer" class="d-flex justify-content-center">
            <div id="part1"> 
                <div class="d-flex justify-content-center">
                    <img id="person" class="img-fluid"  src="{{asset('img/profile.png')}}">
                </div>
                <p id="name">Mylian Gedhe <br>Laravel Developer</p> 
                <a href="{{route('admin.index')}}"><button id="follow">DASHBOARD</button></a>
            </div>

        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>