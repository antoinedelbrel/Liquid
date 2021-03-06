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
  <div id="parent">
    <div id="header" class="bg-light">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <div id="logo_container">
            <a class="navbar-brand" href="{{ route('events.index') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt="logo"></a>
          </div>
          <button class="bouton navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="lien nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="lien nav-link" href="{{ route('register') }}">Register</a>
              </li>
              <li class="nav-item">
                <a class="lien nav-link " href="{{ route('contact') }}" tabindex="-1" aria-disabled="true">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>




    <div id="content">
      @yield('content')
    </div>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

    <footer>
      <div class="container">
        <div id="footer">
          <div id="copyright">
            <p><a class="c" href="#">©</a> antoinedelbrel</p>
          </div>
          <div id="reseau">
            <h3>Follow me</h3>
            <div class="reseaux rounded-social-buttons">
              <a class="network social-button facebook" href="https://www.facebook.com/antoine.delbrel" target="_blank"><i class="fab fa-facebook"></i></a>
              <a class="network social-button twitter" href="https://twitter.com/AntoineDelbrel" target="_blank"><i class="fab fa-twitter"></i></a>
              <a class="network social-button linkedin" href="https://www.linkedin.com/in/antoine-delbrel-48621b181/" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a class="network social-button github" href="https://github.com/antoinedelbrel/leakid" target="_blank"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>



</body>

</html>