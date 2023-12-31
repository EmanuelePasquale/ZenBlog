  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="index.html" class="logo d-flex align-items-center">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <h1>ZenBlog</h1>
          </a>

          <nav id="navbar" class="navbar">
              <ul>
                  <li class="nav-item @if (Route::currentRouteName() == 'homepage') active @endif"><a class="nav-link"
                          aria-current="page" href="{{ route('homepage') }}">Home</a></li>
                  @auth
                      <li class="nav-item @if (Route::currentRouteName() == 'articles.create') active @endif"><a class="nav-link"
                              aria-current="page" href="{{ route('articles.create') }}">Inserisci articolo</a></li>
                  @endauth
                  <li class="dropdown"><a href="category.html"><span>Categories</span> <i
                              class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="#">Business</a></li>
                          <li><a href="#">Culture</a></li>
                          <li><a href="#">Sport</a></li>
                          <li><a href="#">Food</a></li>
                          <li><a href="#">Politics</a></li>
                          <li><a href="#">Celebrity</a></li>
                          <li><a href="#">Startups</a></li>
                          <li><a href="#">Travel</a></li>
                      </ul>
                  </li>

                  <li><a href="about.html">About</a></li>
                  <li class="nick"><a href="contact.html">Contact</a></li>

                  <!-- .Login/LogOut -->
                  @guest
                      <div class="nav-item">
                          <a class="btn" href="{{ route('login') }}">Login</a>
                      </div>
                      <div class="nav-item">
                          <a class="btn" href="{{ route('register') }}">Register</a>
                      </div>
                  @else
                      <li>
                          <span class="nickname">{{ Auth::user()->name }}</span>
                      </li>
                      <div class="nav-item">
                          <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <a class="btn logout" onclick="event.preventDefault(); this.closest('form').submit();">
                                  Logout
                              </a>
                          </form>
                      </div>
                  @endguest
              </ul>
          </nav><!-- .navbar -->

          <div class="position-relative">
              <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
              <a href="#" class="mx-2"><span class="bi-twitter-x"></span></a>
              <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

              <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
              <i class="bi bi-list mobile-nav-toggle"></i>

              <!-- ======= Search Form ======= -->
              <div class="search-form-wrap js-search-form-wrap">
                  <form action="search-result.html" class="search-form">
                      <span class="icon bi-search"></span>
                      <input type="text" placeholder="Search" class="form-control">
                      <button class="btn js-search-close"><span class="bi-x"></span></button>
                  </form>
              </div><!-- End Search Form -->
          </div>

      </div>

  </header><!-- End Header -->
