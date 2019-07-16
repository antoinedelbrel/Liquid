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
            <div class="container">
                <nav>
                    <div id="logo_container">

                        <a href="events"><img class="logo" src="{{ asset('images/logo.png') }}" alt="logo"></a> 
                    </div>
                    
                    <div id="menu">
                        
                        
                        <ul>
                            
                            <li><a class="lien" href="">Login</a></li>
                            <li><a class="lien" href="">Sign-up</a></li>
                            <li><a class="lien" href="contact.php">Contact</a></li>
                        </ul>
                        
                    </div>
                </nav>
            </div>
        </div>
        <hr>
        
        <div class="container">
        
        @yield('content')
        </div>
        
        <div id="footer">
            <h3>Follow me</h3>
            <div class="reseaux">
                <a class="network" href="https://www.facebook.com/antoine.delbrel">facebook</a>
                <a class="network" href="https://twitter.com/AntoineDelbrel">twitter</a>
                <a class="network" href="https://www.linkedin.com/in/antoine-delbrel-48621b181/">linkedin</a>
                <a class="network" href="https://github.com/antoinedelbrel/leakid">github</a>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" defer ></script>

    </body>
</html>