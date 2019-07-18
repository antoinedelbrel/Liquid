<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        
        <title>LIQUID</title>
    </head>
    <body>
    
        <div id="header" class="bg-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div id="logo_container">
                      <a class="navbar-brand" href="events"><img class="logo" src="{{ asset('images/logo.png') }}" alt="logo"></a>

                    </div>           
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="lien nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="lien nav-link" href="#">Sign-up</a>
                        </li>
                        <li class="nav-item">
                          <a class="lien nav-link " href="contact" tabindex="-1" aria-disabled="true">Contact</a>
                        </li>
                      </ul>
                      
                    </div>
                </nav>
            </div>
        </div>

               
                    
                    

                    
                
        
        <div id="content">
            <div class="container">
            
            @yield('content')
            </div>
        </div>
        
      <footer>
        <div id="footer">
            <h3>Follow me</h3>
            <div class="reseaux">
              <ul>
                <li> <a class="network" href="https://www.facebook.com/antoine.delbrel">facebook</a></li>
                <li> <a class="network" href="https://twitter.com/AntoineDelbrel">twitter</a></li>
                <li><a class="network" href="https://www.linkedin.com/in/antoine-delbrel-48621b181/">linkedin</a></li>
                <li> <a class="network" href="https://github.com/antoinedelbrel/leakid">github</a></li>
              </ul>
               
               
                
               
            </div>
        </div>
      </footer>  
        

        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer ></script>

    

    </body>
</html>