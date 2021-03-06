<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Event-Registration-Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/45edd4e973.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--navigationbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="assets/logo2.png" id="logo" alt="Eventzz Palace"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav nav-pills mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" id="home1" data-toggle="pill" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="register1" data-toggle="pill" href="#register">Register-Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="table_reg" data-toggle="pill" href="#regis_table">Registered</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Events" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--Homepage-->
<div class="" id="home">
<section id="slider">
<!--Courasel-->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/event 11.jpg" class="d-block w-100" style="height:540px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>DJ Night</h3>
        <p>Enjoy your Night with amazing songs and dance the way you like !!!!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/event 22.jpg" class="d-block w-100" style="height:540px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="color:#000">Event Management</h3>
        <p style="color:#111">Manage your events with Us. Make your event successfull !!!!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/event 33.jpg" class="d-block w-100" style="height:540px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Music Concerts</h3>
        <p>Join your favourite singers and enjoy the day!!!!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<section id="details">
  <div class="container-fluid">
    <div class="row">
      <div class="ev1 col-lg-6" style="float:left;">
        <img src="assets/1.jpeg" style="width:550px;height:400px;border-radius: 5px; -webkit-box-shadow: 5px 5px 5px #111;
   box-shadow: 5px 5px 5px #111;" alt="Event 1">
      </div>
      <div class="col-lg-6">
        <hr>
        <h1 style="color:#e8505b;">Music Event</h1>
        <hr>
        <h4>A music event is going to be done on july 11. There will a lot of entertainment and mastii during the event. Please join us to make the event wonderful.</h4>
        <br>
        <h5>You can register yourself by filling the registration form!!!!</h5>
        <br>
        <button class="btn btn-lg btn-block btn-dark" onclick="return formfunc()"  type="button">Register</button>
      </div>

    </div>
    <div class="row">

      <div class="col-lg-6">
        <hr>
        <h1 style="color:#e8505b;">Live Music Concert</h1>
        <hr>
        <h4>A Live Music concert is organized by Your Entertainment on july 6. There will a lot of entertainment and joy during the event. Please join us to make the event wonderful and memorable.</h4>
        <br>
        <h5>You can register yourself by filling the registration form!!!!</h5>
        <br>
        <button class="btn btn-lg btn-block btn-dark" onclick="return formfunc()"  type="button">Register</button>
      </div>
      <div class="ev1 col-lg-6">
        <img src="assets/2.jpeg" style="width:550px;height:400px;border-radius: 5px; -webkit-box-shadow: 5px 5px 5px #111;
   box-shadow: 5px 5px 5px #111;" alt="Event 1">
      </div>
    </div>
    <div class="row">
      <div class="ev1 col-lg-6" style="float:left;">
        <img src="assets/3.jpeg" style="width:550px;height:400px;border-radius: 5px; -webkit-box-shadow: 5px 5px 5px #111;
   box-shadow: 5px 5px 5px #111;" alt="Event 1">
      </div>
      <div class="col-lg-6">
        <hr>
        <h1 style="color:#e8505b;">JASS MANAK Live</h1>
        <hr>
        <h4>A like music concert is going to be done in Chandigarh by punjabi singer Jass Manak. There will a lot of entertainment and mastii during the event. Please join us to make the event wonderful and enjoyable.</h4>
        <br>
        <h5>You can register yourself by filling the registration form!!!!</h5>
        <br>
        <button class="btn btn-lg btn-block btn-dark" onclick="return formfunc()"  type="button">Register</button>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-6">
        <hr>
        <h1 style="color:#e8505b;">Dancing Event</h1>
        <hr>
        <h4>A Dance Night Event is going to be done on May 25. There will a lot of entertainment and joy during the event. Please join us to make the event wonderful with your energy and joy.</h4>
        <br>
        <h5>You can register yourself by filling the registration form!!!!</h5>
        <br>
        <button class="btn btn-lg btn-block btn-dark" onclick="return formfunc()"  type="button">Register</button>
      </div>
      <div class="ev1 col-lg-6">
        <img src="assets/4.jpeg" style="width:550px;height:400px;border-radius: 5px; -webkit-box-shadow: 5px 5px 5px #111;
   box-shadow: 5px 5px 5px #111;" alt="Event 1">
      </div>
    </div>
    </div>
</section>
</div>

<!--Form-->
<div class="" id="register">
  <h1 style="text-align:center; padding-bottom:10px;">Please fill the form to register yourself!!!!</h1>
    <div class="container" style="background:#d3dbff;">
    <div class="text-success" id="succ"></div>
    <div class="text-danger" id="fail"></div>
    <form name="myform" id="regis_form" method="post" action="#">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="tel">Phone Number</label>
    <input type="tel" class="form-control" id="tel" name="tel" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St,Jammu">
  </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
   <div class="row">
     <legend class="col-form-label col-sm-2 pt-0" name="gender">Gender</legend>
     <div class="col-sm-10">
       <div class="form-check">
         <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" >
         <label class="form-check-label" for="gridRadios1">
           Male
         </label>
       </div>
       <div class="form-check">
         <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Female">
         <label class="form-check-label" for="gridRadios1">
           Female
         </label>
       </div>
     </div>
   </div>
   <span id="alt4" class="text-danger font-weight-bold"> </span>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Select Event</label>
      <select id="inputState" name="event" class="form-control">
        <option selected>Choose...</option>
        <option>Music Event</option>
        <option>Live Music Concert</option>
        <option>JASS MANAK Live</option>
        <option>Dancing Event</option>
      </select>
    </div>
  </div>
  <button type="submit" name="submit" id="submit" onclick="return validateform()" class="btn btn-lg btn-primary">Register</button>
  <br><br>
</form>

    </div>
    <div class="partners">
      <h2 style="text-align:center;">Our Partners</h2>
      <hr style="padding:5px 40px;color:#000;width: 60px;">
      <section id="press">
      <img class="press-logo" src="assets/geetmp3.png" alt="tnw-logo">
      <img class="press-logo" src="assets/dance1.png" alt="biz-insider-logo">
    </section>
    </div>

</div>

<!--Table-->
<div class="" id="regis_table">
  <h1 style="text-align:center; color:red; padding: 30px 0;">Table Showing registered people details!!!!!</h1>
  <div class="container-fluid">
      <div class="table-responsive">
      <div id="demo1">

      </div>
  </div>


  </tbody>
</table>
</div>

</div>

<!--footer-->
<!-- Footer -->
      <footer class="page-footer font-small stylish-color-dark bg-dark pt-4" style="bottom:0;">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-4 mx-auto">
              <!-- Content -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About Us</h5>
              <p style="color:#cbeaed;">Eventzz Palace is a place where you can enjoy the real happiness with your favourite events.
                Stressed!!! WorkLoad!!!
                Have a relax from the hectic life and enjoy our music, dance and other events!!!.</p>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-2 mx-auto">
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-1">Events</h5>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Event 1</a>
                </li>
                <li>
                  <a href="#!">Event 2</a>
                </li>
                <li>
                  <a href="#!">Event 3</a>
                </li>
                <li>
                  <a href="#!">Event 4</a>
                </li>
              </ul>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold mt-3">Contact Us</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p style="color:#cbeaed;">
                  <i class="fas fa-home mr-4"></i> Jammu, JK 185153, India</p>
                <p style="color:#cbeaed;">
                  <i class="fas fa-envelope mr-4"></i> eventzz@info.com</p>
                <p style="color:#cbeaed;">
                  <i class="fas fa-phone mr-4"></i> + 01 234 567 88</p>
                <p style="color:#cbeaed;">
                  <i class="fas fa-print mr-4"></i> +91-7865009872</p>

              </div>

            <hr class="clearfix w-100 d-md-none">
          </div>
        </div>
        <hr>
        <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
              <i class="fab fa-facebook-f"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
              <i class="fab fa-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
              <i class="fab fa-google-plus-g"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
              <i class="fab fa-dribbble"> </i>
            </a>
          </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background:#000;">© 2020 Copyright:
          <a href="index.html"> Eventzz Palace.com</a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->
      <script src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script.js" defer>

    </script>
  </body>
</html>
