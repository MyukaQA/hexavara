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
    <div id="container">
        <div id="profilecontainer">
            <div id="part1"> <button id="dropdown">
                    <hr class="hr">
                    <hr class="hr">
                    <hr class="hr"></button> <img id="person"  src="{{asset('img/profile.png')}}">
                <p id="name">Mylian Gedhe</p> 
                <p id="name">Laravel Developer</p> 
                {{-- <button id="web" class="skill">Web</button> 
                <button id="graphic" class="skill">Graphic</button> 
                <button id="ui" class="skill">UI / UX</button> 
                <a href="#"><i class="fab fa-facebook fa-lg"></i></a> 
                <a href="#"><i class="fab fa-twitter fa-lg"></i></a>  --}}
                <a href="#"><i class="fab fa-instagram fa-lg"></i></a> 
                <a href="#"><button id="follow">FOLLOW</button></a>
            </div>
            <div id="part2">
                <p id="txt1">Projects</p>
                <p id="txt2">12</p>
                <p id="txt3">Followers</p>
                <p id="txt4">2538</p>
                <p id="txt5">Following</p>
                <p id="txt6">429</p>
            </div>
            <div id="next"> <a href="#"><i id="cross2" class="fas fa-times fa-2x"></i></a> <img id="person2" src="https://crizaze.com/wp-content/uploads/2013/12/professional-model-200x300.jpg">
                <p id="name2">Alessandra Benoit</p>
                <p id="phone"><i class="fas fa-mobile-alt"></i><span id="code">+91</span> 95748-62178</p> <a href="#"><button id="project" class="button">Projects</button></a> <a href="#"><button id="resume" class="button">My Resume</button></a> <a href="#"><button id="hire" class="button">Hire Me</button></a> <a href="#"><button id="message" class="button">Message Me</button></a>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/landing/style.js')}}"></script>
</body>
</html>