<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar is-link" role="navigation" aria-label="main navigation">
      <div class="container">
        <div class="navbar-brand">
          <div class="m-2 has-background-light is-round" style="border-radius: 0.25rem;">
            <a class="navbar-item" href="{{ route('index') }}">
              <img src="{{ asset('./assets/binus-logo.jpeg') }}" alt="logo binus">
            </a>
          </div>
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="nav-item">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div id="nav-item" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item" href="{{ route('dosen.index') }}">
              Dosen
            </a>
            <a class="navbar-item" href="{{ route('major.index') }}">
              Major
            </a>
            <a class="navbar-item" href="{{ route('faculty.index') }}">
              Faculty
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>@yield('main')</main>
  <footer class="p-5 has-background-link has-text-light">
    <div class="is-flex is-justify-content-space-between">
      <div class="">Copyrights 2023 - Rafi Muhammad</div>
      <div>
        <a class="mr-5" href="https://www.instagram.com/binusuniversityofficial/?hl=en" target="_blank">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA60lEQVR4nO2UvQrCMBCAO7lYfSCpqF1t8XEEcZNifRuprlUfxuqu7p8EbiglPWvi6AeBkLvmu+YvCP64ACyAC/DiMybnDKRdJ89xJ+tSuQsjIJJ+ognMsrgQAWPpnzTBs2WCPTAB+tKmQNGS+9AENpZK/sr2wTeCvYz3gB1wAyo5CD2JHXwEE+Vk5RKb+QhCGTeVN7lLbPALQWWJXSU29BFMlSXaSiz2ERS1Tc7lT5qbfPQRGFZK/hoLLhftIKcllBbbKu9y0cyr6EupCdIfCOatApFkHpNv1MlrksS8isqe1DE55cfK/wQtvAGJl1RkrLoOqwAAAABJRU5ErkJggg==" alt="logo instagram">
        </a>
        <a class="mr-5" href="https://twitter.com/BINUS_UNIV" target="_blank">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABHUlEQVR4nO3UvStGUQDHcS89RGRgNPoHjBgloz+ARUb5G+QpZTJgs1EGm41V3gaZLAolg1IiA+Xto1NnkO557n2eZ5B6vtu955zf99xf556mpgb/DnSijEu84So+d6ANE5hPLV5Be074sWyC6CmK+7MWN+MdO+hOCMoq84p1zKZ2+BAnhl2MZIyH93lsoJQSrP6afIRpDMSOP3LCv0ITqYqDoAv7auc5GR4FCxjFYY2CizzBpvrYyhOEig7qEExWFERJC2YqnPcUd+E/KSLYxjVeklHZzOWGR0EvdqsM30NrIcEP0SCW8JkTfo6+oqGl+AVDWMRjgZ33FA0fx1nBSm4wFQ5EVbVE0TCWcYr7eCXf4gRrGAvXctXBDf6Mb7qxe/M/XCA6AAAAAElFTkSuQmCC" alt="logo twitter">
        </a>
        <a href="https://www.youtube.com/c/BINUSOFFICIAL" target="_blank">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA2ElEQVR4nO3UPWoCQRyG8T2ARG+RU8T1NJ4jZS6Rj5topbZWgUAMiFUKxSIYcOUnwkggjs76ETaFD2yz+77/B2ZmJ8uu/CuQ4wldvGGCKeZ2mYdvk5Dthm6+b3gLK+dToBkTvLgczzHB4IKCfkzwkSgtjxCMYoJZonSDNj5LCKYxweJQI/vJ1XCP7wPxr5igKCPYglsM98SLrArBoowADTycskSpTa6fu8mpY3oM73/9o/UquSry1EkqyWbG3Y4gSJp4RAevGIcrefP8Zvt+HLKd0I0Pv1IZa3fFpdgYq/I1AAAAAElFTkSuQmCC" alt="logo youtube">
        </a>
      </div>
    </div>
    <div class="is-flex is-justify-content-flex-start">
      <p class="py-1 shout-out">Social media icons from:</p>
      <a href="http://icons8.com/icons" target="_blank">
        <button class="button is-small is-primary is-light">
          Icons 8
        </button>
      </a>
    </div>
  </footer>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>