<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/index"><img src="../assets/img/Logo.png" width="110" height="35" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link  {{ $slug == 'home' ? 'active' : '' }} px-lg-3 py-3 py-lg-4" href="/index" >Home</a></li>
                <li class="nav-item"><a class="nav-link  {{ $slug == 'about' ? 'active' : '' }} px-lg-3 py-3 py-lg-4" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link {{ $slug == 'services' ? 'active' : '' }} px-lg-3 py-3 py-lg-4" href="/services">Services</a></li>

                @auth
            
                      <li class="nav-item"><a class="nav-link {{ $slug == 'services/cart' ? 'active' : '' }} px-lg-3 py-3 py-lg-4" href="/services/cart">Keranjang</a></li>
                      {{-- <form method="POST" action="{{ route('logout') }}"> --}}
                          @csrf
                          <li class="nav-item">
                              <a  class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('/index').submit();">Logout</a></li>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                      {{-- </form> --}}
                  </ul>
              </li>
                   @else
                   <li class="nav-item"><a class="nav-link  {{ $slug == 'register' ? 'active' : '' }} px-lg-3 py-3 py-lg-4" href="/register">Sign In</a></li>
               @endauth
               

                {{-- <li class="nav-item"><a class="nav-link  {{ $slug == 'login_admin' ? 'active' : '' }} px-lg-3 py-3 py-lg-4 " href="/admin/index">Login Admin</a></li> --}}
            </ul>
        </div>
    </div>
</nav>