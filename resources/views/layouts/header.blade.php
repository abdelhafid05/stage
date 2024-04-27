<style>
    .font {
        font-family: Arial, sans-serif; /* Use Arial font as the primary font, fallback to a sans-serif font */
        font-size: 18px; /* Set font size to 18 pixels */
        font-weight: bold; /* Set font weight to bold */
        font-style: italic; /* Set font style to italic */
        color: #333; /* Set font color to dark gray */
        /* You can add more styling properties here */
    }

</style>
<header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span class="font">
            Nataura
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('layouts.why')}}">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/nataurabyna?igsh=NnprZjNmM2tqbWNy">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="{{route('login.show')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>