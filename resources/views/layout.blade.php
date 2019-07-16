<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>LIQUID</title>
    </head>
    <body>
        <div id="header">
            <h1><a class="titre" href="events">Liquid</a></h1>
                <div id="nav">
                    
                    <nav>
                        <ul>
                            
                            <li><a class="lien" href="">Login</a></li>
                            <li><a class="lien" href="">Sign-up</a></li>
                            <li><a class="lien" href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
        </div>
        <hr>
        
        <div class="container">
        
        @yield('content')
        </div>
        <hr>
        <div id="footer">
            <h3>Follow me</h3>
            <div class="reseaux">
                <a class="network" href="">facebook</a>
                <a class="network" href="">twitter</a>
                <a class="network" href="">linkedin</a>
                <a class="network" href="">github</a>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" defer ></script>

    </body>
</html>