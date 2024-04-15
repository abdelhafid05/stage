<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  

  <title>
    Giftos
  </title>

  @include('layouts.css')

</head>

<body>
  <div class="hero_area">
    
    <!-- header section strats -->
    @include('layouts.header')
    <!-- end header section -->

    <!-- slider section -->
    @include('layouts.slider')
    <!-- end slider section -->
    <!-- end hero area -->
    <!-- shop section -->
    <!-- end shop section -->

  <!-- saving section -->
  @include('layouts.saving')
  <!-- end saving section -->

  <!-- why section -->

 @include('layouts.why')


  <!-- end why section -->


  <!-- gift section -->

 @include('layouts.gift')


  <!-- end gift section -->


  <!-- contact section -->

  @include('layouts.contact')

  <!-- end contact section --> <br><br>

  <!-- info section -->
    <!-- footer section -->
    @include('layouts.footer')

    <!-- footer section -->

  </section>

  <!-- end info section -->


  @include('layouts.js')


</body>

</html>