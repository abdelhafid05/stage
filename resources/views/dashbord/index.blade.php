<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index with Sidebar</title>
  <style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 250px;
  height: 100%;
  background-color: #333;
  color: #fff;
  padding: 20px;
  box-sizing: border-box;
}

.logo {
  text-align: center;
  margin-bottom: 20px;
}

.logo img {
  width: 80px;
}

.sidebar ul {
  list-style-type: none;
  padding: 0;
  margin-bottom: 20px;
}

.sidebar ul li {
  padding: 10px 0;
}

.sidebar ul li a {
  display: block;
  color: #fff;
  text-decoration: none;
  padding: 10px;
}

.sidebar ul li a:hover {
  background-color: #555;
}

.logout-btn {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #dc3545;
  border: none;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

.logout-btn:hover {
  background-color: #c82333;
}

.content {
  margin-left: 270px; /* Adjust margin to make space for sidebar */
  padding: 20px;
}

/* Style sections for demonstration purposes */
section {
  margin-bottom: 20px;
  border-bottom: 1px solid #ccc;
}

section:last-child {
  border-bottom: none;
}
.logout-btn {
  display: inline-block;
  padding: 10px 10px;
  background-color: #dc3545;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}

.logout-btn:hover {
  background-color: #c82333;
}

  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="sidebar">
    <div class="logo">
        <img src="{{ asset('Beauty_woman_hair_logo_design_and_business_card_vector_illustration_template-removebg-preview.png') }}" alt="Company Logo" style="width: 150px; height: auto;">
    </div>
    <ul>
      <li><a href="{{route('dashbord.home')}}">Home</a></li>
      <li><a href="{{route('articles.index')}}">Visit Website</a></li>
      <li><a href="{{route('users.index')}}">Update Profile</a></li>
      
    </ul>
    <a href="{{route('login.logout')}}" class="logout-btn">log out</a>
  </div>
  <div class="content">
    <!-- Your content goes here -->
    @yield('start')
    @yield('content')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
