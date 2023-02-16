<nav class="navbar navbar-expand-lg bg-body-light">
    <div class="container-fluid p-0 container col-10">
      <a class="navbar-brand p-0 {{ ($title === "Landing Page") ? 'active' : ''  }}" href="/">
        <img src="img/logo.png" class="" alt="" width="50">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-lg-12">
          <li class="nav-item">
            <a class="nav-link active fw-semibold {{ ($title === "Tentang Aspera") ? 'active' : ''  }}" aria-current="page" href="/tentangaspera">Tentang Aspera</a>
          </li>
          <li class="nav-item col-lg-8 me-5">
            <a class="nav-link fw-semibold {{ ($title === "Pengaduan") ? 'active' : ''  }}" href="/pengaduan">Pengaduan</a>
          </li>

          @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 sm:block">
              @auth
                  <form method="POST" action="{{ route('logout') }}" class="btn btn-danger">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <span class="text-light text-decoration-none">
                        {{ __('Keluar') }}
                    </span>
                        </li>
                    </x-responsive-nav-link>
                </form>
              @else
                  <a href="{{ route('login') }}" class="btn fw-semibold">Masuk</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                  @endif
              @endauth

          </div>
         @endif
        </ul>
      </div>
    </div>
  </nav>
