<style>
    .font {
        font-family: Arial, sans-serif; /* Use Arial font as the primary font, fallback to a sans-serif font */
        font-size: 18px; /* Set font size to 18 pixels */
        font-weight: bold; /* Set font weight to bold */
        font-style: italic; /* Set font style to italic */
        color: #333; /* Set font color to dark gray */
        /* You can add more styling properties here */
    }
    @keyframes colorChange {
    0% { color: pink; } 
    50% { color: #ff0000; } 
    100% { color: #333; } 
}

.font {
    font-family: Arial, sans-serif;
    font-size: 18px;
    font-weight: bold;
    font-style: italic;
    color: #333;
    animation: colorChange 2s infinite; 
}


</style>
<header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{route('articles.index')}}">
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
              <a class="nav-link" href="{{route('articles.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('articles.index')}}">
                Shop
              </a>
            </li>
            <li class="nav-item">
            
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
           
            <form class="form-inline ">
             
            </form>
          </div>
        </div>
      </nav>
    </header>