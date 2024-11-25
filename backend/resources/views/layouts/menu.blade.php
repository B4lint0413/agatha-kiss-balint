<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Agatha Christie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('novels.list', 'marple')}}">Marple</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('novels.list', 'poirot')}}">Poirot</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lekérdezések
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('site.oldestnovel')}}">Legrégebbi regény</a></li>
            <li><a class="dropdown-item" href="{{route('site.murder')}}">Gyilkos könyvek</a></li>
            <li><a class="dropdown-item" href="{{route('site.thefifties')}}">50-es évek könyvei</a></li>
            <li><a class="dropdown-item" href="{{route('site.cheapest')}}">Legolcsóbb könyv</a></li>
            <li><a class="dropdown-item" href="{{route('site.mostorders')}}">Legtöbb darabszámú rendelésű könyv</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>