<!DOCTYPE html>
<html>
    <head>
        <title>Assignment2</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <link rel="stylesheet" href="<?php echo base_url();?>css/loginStyle.css">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <form class="log" action="<?php echo base_url()?>CrimeC/login_validation" method="post"> 
        <h2>LOGIN</h2>
        <input type="text" name="email_mob" placeholder="Email or Mobile"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input class="btn_login" type="submit" name="login" value="Login">
    </form>
<!---Header section-->
 <header>
  <nav>
    <div class="container-fluid top">
      <div class="row">
        <div class="col-7">
          <a  href="#" class="text-decoration-none text-white">Home Terms</a>
        </div>
        <div class="col-5 text-white text-end">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-google"></i>
        
        </div>
      </div>
    </div>
  </nav>
</header>
<!--menu section-->
<nav class="navbar navbar-expand-lg top1">
  <div class="container">
    <a href="#" class="navbar-brand">Demo</a>
    <div class="collapse navbar-collapse" >
      <ul class="navbar-nav ms-auto top-nav">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Feature</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
      </ul>
    </div>
  </div>
</nav>
<!---Section 1 Start-->
<section class="banner">
 
  <div class="container-fluid slide">
    <div class="container">
      <div class="row vh-100 align-items--center">
        <div class="col-12 text-center text-white">
          <h1>Welcome to demo</h1>
          <h2>Welcome World</h2>
        </div>
      </div>
    </div>

  </div>
</section>
<!-----------section 2 start-->
<!------------<section class="py-5 top1">
    <div class="container text-center slide text-white py-5">
        <div class="row">
            <div class="col-sm-3">
                <div class="slides">
                <i class="fab fa-dropbox fa-5x"></i>
                <h2> out of the box</h2>
            </div>
                <div class="col-sm-3">
                <i class="fab fa-studiovinari fa-5x"></i>
                <h2> New Learning</h2>
                </div>
                    <div class="col-sm-3">
                <i class="fas fa-rocket fa-5x"></i>
                <h2> Running speed</h2>
            </div>
            <div class="col-sm-3">
                <i class="fas fa-cut fa-5x"></i>
                <h2> Time Consuming</h2>
            </div>
        </div>
    </div>
</section>
----------------->
<section class="top1 py-5">
    <div class="container text-center py-3 text">
        <div class="row text-white ">
            <div class="col-3 ">
                <div class="back-icon py-3">
                <i class="fab fa-dropbox fa-5x"></i>
                <div class="py-5 ">
                    <h3> Out of the box</h3>
                </div>
                <a href="#" class="btn btn-outline-danger">Learn More</a>
                </div>
                </div>
            <div class="col-3 ">
                <div class="back-icon py-3">
                <i class="fab fa-studiovinari fa-5x"></i>
                <div class="py-5">
                    <h3> New Learning</h3>
                </div>
                <a href="#" class="btn btn-outline-danger" >Learn More</a>
                </div>
                </div>
                <div class="col-3 ">
                    <div class="back-icon py-3">
                    <i class="fas fa-rocket fa-5x"></i>
                    <div class="py-5">
                        <h3> Running Speed</h3>
                    </div>
                    <a href="#" class="btn btn-outline-danger" >Learn More</a>
                    </div>
                </div>
                    <div class="col-3 ">
                        <div class="back-icon py-3">
                        <i class="fas fa-cut fa-5x"></i>
                        <div class="py-5">
                            <h3> Time Consuming</h3>
                        </div>
                        <a href="#" class="btn btn-outline-danger" >Learn More</a>
                        </div>
                        </div>
                    
                            <div class="container text py-5">
                                <div class="row text-white top py-3">
                                    <div class="col-8  ">
                                    <h3>special rate in very limited times</h3>
                                    </div>
                                    <div class="col-4 text-end ">
                                    <a href="#" class="btn btn-success btn-lg btn-block px-5">click here<i class="fas fa-hand-pointer ps-3"></i></i></a>
                                </div>
                            </div>
                        </div>
                                
                                        
                                        <div class="container text-white">
                                            <div class="text-center">
                                                <h4>Heading</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, voluptatibus amet? Voluptates sapiente esse libero praesentium, accusamus ex optio assumenda.</p>

                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <h5> Heading</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card">
                                                        <div class="card-body bg-dark m-1">
                                                            <h5>Standard</h5>
                                                            <p><i class="fas fa-check-circle"></i> First price ever</p>
                                                            <p><i class="fas fa-check-circle"></i> First price ever</p>
                                                            <p><i class="fas fa-check-circle"></i> First price ever</p>
                                                            <a href="#" class="btn topone btn-secondary btn-block text-white">Sign Up</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-3">
                                                    <div class="card">
                                                        <div class="card-body bg-dark m-1">
                                                            <h5>Standard</h5>
                                                            <p><i class="fas fa-check-circle"></i> First price ever</p>
                                                            <p><i class="fas fa-check-circle"></i> First price ever</p>
                                                            <p><i class="fas fa-check-circle"></i> First price ever</p>
                                                            <a href="#" class="btn topone btn-secondary btn-block text-white">Sign Up</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card">
                                                        <div class="card-body bg-dark m-1">
                                                            <h5>Standard</h5>
                                                            <p><i class="fas fa-check-circle"></i> First price ever</p>
                                                            <p><i class="fas fa-check-circle"></i> First price ever</p>
                                                            <p><i class="fas fa-check-circle"></i> First price ever</p>
                                                            <a href="#" class="btn topone btn-secondary btn-block text-white">Sign Up</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        
        </div>
    </div>

</section>

<section class="py-5">
    <div class="container">
        <div>
            <h2>Recent Works</h2>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="img/1.jpg" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="img/2.jpg" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="img/3.jpg" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="img/4.jpg" class="img-fluid">
            </div>
        </div>
    </div>

</section>
<footer class="top1">
    <div class="container py-5">
        <div class="row text-white">
            <div class="col-4">
                <h3 text-white>DEMO</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, voluptatibus amet? Voluptates sapiente esse libero praesentium, accusamus ex optio assumenda.</p>
            </div>
            <div class="col-4">
                <h3 text-white>Links</h3>
                <ul class="list-unstyled">
                <li>Home</li>
                <li>About</li>
                <li>Pages</li>
                <li>Features</li>
                <ul>
            </div>
            <div class="col-4">
                <div>
                    <h1> Team</h1>    
                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="img/team1.jpg" class="img-fluid">
                    </div>
                    <div class="col-4">
                        <img src="img/team2.jpg" class="img-fluid">
                    </div>
                    <div class="col-4">
                        <img src="img/team3.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="slide align-items-center">
        <p class="text-white text-center py-2 pb-2">UI Batch &copy 2019-2020</p>
    </div>
</footer>
<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js"></script>

</body>   
</html>