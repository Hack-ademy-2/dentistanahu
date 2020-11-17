<nav class="navbar navbar-expand-lg navbar-light mynav sticky-top">
  <a class="navbar-brand text-white" href="{{route('index')}}">32<i class="ml-2 fas fa-tooth text-white"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{route('index')}}">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{route('contacto')}}">Contacto</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Citas
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('cita')}}">Pedir hora</a>
          <a class="dropdown-item" href="{{route('programadas')}}">Programadas</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('nosotros')}}">Nosotros</a>
      </li>
    </ul>
  </div>
</nav>