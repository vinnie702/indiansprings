<?php
include_once 'headerinclude.php';
?>

<!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/welcome/">Nevada Lodge #48</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/welcome/aboutus">About</a></li>
                <li><a href="/welcome/contactus">Contact</a></li>
                <li><a href="/welcome/officers">Officers</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <!-- <li class="dropdown"> -->
                  <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a> -->
                  <!-- <ul class="dropdown-menu"> -->
                    <!-- <li><a href="#">Action</a></li> -->
                    <!-- <li><a href="#">Another action</a></li> -->
                    <!-- <li><a href="#">Something else here</a></li> -->
                    <!-- <li class="divider"></li> -->
                    <!-- <li class="nav-header">Nav header</li> -->
                    <!-- <li><a href="#">Separated link</a></li> -->
                    <!-- <li><a href="#">One more separated link</a></li> -->
                  <!-- </ul> -->
                <!-- </li> -->
              </ul>
                <form method="GET" class="navbar-search pull-right navsearch" action="http://www.google.com/search">
                    <input type="text" class="search-query" placeholder="Search Disabled">
                    <input type="submit" name="btnG" class="btn btn-small btn-primary" value="search">
                    <input type="hidden" name="domains" value="http://www.indiansprings48.com">
                    <input type="hidden" name="sitesearch" value="http://www.indiansprings48.com">
                </form>
                <ul class="nav pull-right">
                    <li><a href="/admin">Admin Area</a></li>
                </ul>

            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="/public/img/mason2.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn More</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/public/img/mason3.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/public/img/mason1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->




