<?php
include_once 'headerinclude.php';
?>

   <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/welcome">Admin Mode</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="/admin/home">Home</a></li>
                <li><a href="/admin/aboutus">About</a></li>
                <li><a href="/admin/contactus">Contact</a></li>
                <li><a href="/admin/officers">Officers</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Lodge Members</li>
                    <li><a href="#">Add New Member</a></li>
                    <li><a href="#">List Of Members</a></li>
                  </ul>
                </li>
              </ul>
                   <form method="GET" class="navbar-search pull-right navsearch" action="http://www.google.com/search">
                    <input type="text" class="search-query" placeholder="Search Disabled">
                    <input type="submit" name="btnG" class="btn btn-small btn-primary" value="search">
                    <input type="hidden" name="domains" value="http://www.indiansprings48.com">
                    <input type="hidden" name="sitesearch" value="http://www.indiansprings48.com">
                </form>
                <ul class="nav pull-right">
                    <li><a href="/admin/addmember">Add Member</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
             </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



<div class='container'>


    <?php include_once 'alert.php' ?>
