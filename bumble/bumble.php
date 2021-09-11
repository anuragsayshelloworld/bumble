<?php
session_start();
$_SESSION['username'] = "Anuragironside";
?>
<html lang="en">
<head>

  <title>Bumblee | Home</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="styleshover.css">
 


<script type="text/javascript">
  $(document).ready(function(){
  $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back-to-top').fadeIn();
      } else {
        $('#back-to-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });
});

</script>
<script type="text/javascript">
  $(document).ready(function(){
  $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#chatwithadmin').fadeIn();
      } else {
        $('#chatwithadmin').fadeOut();
      }
    });

});

</script>

<style type="text/css">
  .card{
    float: left;
    width: 22%;
    height: 250px;
    margin: 8px 12px;
  }
 
.back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
}
.chatwithadmin {
    position: fixed;
    bottom: 25px;
    left: 25px;
    display: none;
}
.carousel-inner img {
      width: 100%;
      height: 250px;
    }
.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 230px; 
  width: 100px;
  outline: black;
  background-size: 100%, 100%;
  background-color:#DECCC8;
  opacity: 0.3;
}


.carousel-control-next-icon:after
{ 
  font-size: 30px;
  color: red;
}

.carousel-control-prev-icon:after {
  font-size: 30px;
  color: red;
}
</style>

</head>

<body class="bg-light">
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top" style="opacity: 0.9">
  <a class="navbar-brand" href="#">Bumble</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">


      <li class="nav-item dropdown" style="margin-top: 7px">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b>Categories</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="#">Consumer electronics</a>
          <a class="dropdown-item" href="#">Fashion and clothing</a>
          <a class="dropdown-item" href="#">Properties</a>
          <a class="dropdown-item" href="#">Furnitures and decors</a>
          <a class="dropdown-item" href="#">Books,hobbies & stores</a>
          <a class="dropdown-item" href="#">Toys, Gifts and Crafts</a>
          <a class="dropdown-item" href="#">Made in Nepal</a>
          <a class="dropdown-item" href="#">Others</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> 
      <li class="nav-item dropdown">

        <form class="form-inline my-2 my-lg-0 nav-link">
      <input class="form-control mr-sm-2" type="search" placeholder="Search  cars, properties, latest phones and stuff" aria-label="Search" style="width: 400px;margin-left: 100px;"  id="navbarDropdown1" data-toggle="dropdown">


        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-item" style="width: 700px;">
            <p>No results found</p>
          </div>


        </div>


      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
      </li>
    </ul>
    
    <ul class="navbar-nav" style="float: right;margin-right: 30px;">
        <li class="nav-item">
        <?php
        if (!isset($_SESSION['username'])) {
        echo '
        <a class="nav-link" href="#">Chat</a>';
      }
      else
      {
      echo '<div class="dropdown show">
  <a class="btn btn-muted dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Chat 
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:300px;">
  <div class="dropdown-item" href="#">
  <form action="" method="post" class="form-group">
  <input type="text" placeholder="Vendor ID" class="form-control">
  <hr>
  <input type="text" placeholder="Subject" class="form-control">
  <hr>
  <textarea class="form-control" placeholder="your message here"></textarea>
  <hr/>
  <button type="button" class="btn btn-primary">Request</button>
  </form>
  </div>
  
  </div>
</div>';
      }
        ?>
      <li class="nav-item">
        <?php
        if (!isset($_SESSION['username'])) {
        echo'  
        <a class="nav-link" href="#" data-target="#myModal" data-toggle="modal">
        Login
      </a>';
    }
    else
    {
      echo '<div class="dropdown show">
  <a class="btn btn-muted dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   '.$_SESSION['username'].' 
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <div class="dropdown-item" href="#">Photo here</div>
  <div class="dropdown-item" href="#">Email here</div>
  <div class="dropdown-item" href="#">Purchase history here</div>
  <div class="dropdown-item" href="#">Many more here</div>
    <div class="dropdown-item" href="#">Anuragironside</div>
    <div class="dropdown-item" href="#">Some data about user here</div>
  </div>
</div>';
    }
      ?>

      </li>
            </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Post ads</a>
      </li>
    </ul>
  </div>
</nav>


<!-- navbar -->

<!-- quicklinks -->
<div class="container-fluid">
  <div class="row">
    <div class="col w-100 shadow p-3 mb-5 bg-white rounded" style="background-color: white;height:60px;">
    </div>
  </div>
</div>
<!--quicklinks -->

<!--slideshowdiv -->
<div class="container-fluid">
  <div class="row">
    <div class="col w-100">
    <div id="carouselExampleIndicators" class="carousel slide" data-interval="3000" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="teddy.jpg" alt="First slide">

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="nature.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="flower.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
</div>  
      
   
<!--slideshowdiv -->

<!--ads slideshow -->
<div class="container-fluid" style="margin-top: 50px">
  <div class="row">
    <div class="col w-100">
     <div style="font-size: 24px">
    <span class="text-dark">What's new?</span>
  </div>
      </div>
  </div>
    <div class="row">
    <div class="col w-100">
 
   <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="7000">
<!--    <ol class="carousel-indicators">
    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExample" data-slide-to="1"></li>
    <li data-target="#carouselExample" data-slide-to="2"></li>
  </ol>
-->
  <div class="carousel-inner">
    <div class="carousel-item active">

    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>

    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>
    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>

    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>


    </div>
    <div class="carousel-item">
    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>

    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>
    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>

    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>

    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>
    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>

    <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div>
    <div class="card-footer">Footer</div>
    </div>
    </div>
  </div>
  <!--<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
-->
</div>

      </div>
  </div>

</div>
  
<!--ads slideshow -->

<!--fresh recommendation -->
<div class="container"  style="margin-top: 50px">
  <div class="row">
    <div class="col">

      <div style="font-size: 24px">
    <span class="text-dark">Recommended for you</span>
  </div>

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div>
  <div class="card-footer">Footer</div>
</div>

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div>
  <div class="card-footer">Footer</div>
</div>

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div>
  <div class="card-footer">Footer</div>
</div>

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div>
  <div class="card-footer">Footer</div>
</div>

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div>
  <div class="card-footer">Footer</div>
</div>

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div>
  <div class="card-footer">Footer</div>
</div>

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div>
  <div class="card-footer">Footer</div>
</div>

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div>
  <div class="card-footer">Footer</div>
</div>

      
    </div>
  </div>
</div>
<!--fresh recommendation -->

<!--footer-->
<div class="container-fluid">
  <div class="row">
    <div class="col w-100" style="height: 130px;background-color: #EEEEEE;">
      
    </div>
  </div>
</div>
<!--footer -->

<!-- -->
<a id="back-to-top" href="#" class="btn btn-outline-danger my-2 my-sm-0 btn-lg back-to-top" role="button">Back to top</a>

<div class="btn-group dropup">
<a id="chatwithadmin" href="#" class="btn btn-outline-success my-2 my-sm-0 btn-lg chatwithadmin dropdown-toggle" role="button" data-toggle="dropdown">Chat with admin</a>
<div class="dropdown-menu">
<div class="dropdown-item" href="#">
  <textarea class="form-control" placeholder="Your message here"></textarea>
  <button class="btn btn-primary">Send</button>
</div>
</div>
</div>


<!-- -->

<!--Login modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>

      <!-- Modal body -->
      <div class="modal-body">



<div id="demo" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="teddy.jpg" style="width:100%;height: 250px">
    </div>
    <div class="carousel-item">
      <img src="flower.png"  style="width:100%;height: 250px">
    </div>
    <div class="carousel-item">
      <img src="tech.jpg"  style="width:100%;height: 250px">
    </div>
  </div>


</div>
        <form action="" method="">
        <button type="" class="btn btn-outline-primary my-2 my-sm-0" style="width:100%">Continue with facebook</button>
      </form>
      <form action="" method="">
      <button type="" class="btn btn-outline-primary my-2 my-sm-0" style="width:100%"> Continue with Google</button>
      </form>
      <form action="" method="">
      <button type="" class="btn btn-outline-primary my-2 my-sm-0" style="width:100%">Continue with phone number</button>
      </form>
             
      <span style="font-size:10px ">We will not share your personal information. If you continue it indicates that you agree with our <a href="" style="text-decoration-style: none;">terms and policies.</a></span>
      </div>

<!--Login modal -->

</body>

</html>
