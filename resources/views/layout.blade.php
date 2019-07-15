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
    
        <h1>LIQUID</h1>
        <div id="nav">
            <nav>
                <ul>
                    <li><a class="lien" href="profil.php">Profil</a></li>
                    
                    <li><a class="lien" href="contact.php">Contact</a></li>
                </ul>
            </nav>
    </div>

       
        
        <div class="container">
        
        @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}" defer ></script>

    </body>
</html>