<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Laravel Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
          @auth

        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
          @else
              <li class="nav-item">
                  <a class="nav-link" href="/login">Login</a>
              </li>
          @endauth
      </ul>
      <span class="navbar-text">
          @auth

          <a class="nav-link">{{auth()->user()->name}}</a>
          <a class="nav-link">{{auth()->user()->role}}</a>
          <a class="nav-link" href="/logout">Logout</a>
          @endauth
      </span>
    </div>
  </div>
</nav>
