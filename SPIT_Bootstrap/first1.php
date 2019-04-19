<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>FooDies!!</title>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href="assets/css/custem.css">
<script type="text/javascript" src="assets/js/myjs.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 Popper JS -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

 Latest compiled JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
-->
<style type="text/css">
body{
  background-color: #ddd;
}
  #slider{  
    width:100%;  
    height:400px;  
    margin: 0%;  
    margin-left:0%;  
    overflow:hidden;  
}  
.slides{  
    display:block;  
    width:6000px;  
    height:400px;  
    margin-left:0;  
    padding:0;  
}  
img{  
    width:600px;  
    height:200px;  
}  

.slider {
    position: relative;
    width:100%;
    height:350px;
    overflow: hidden;
    margin: 10px auto;
    border:transparent;
}
.slider img {
    width: 100%;
    height: inherit;
    position:absolute;
    top:0;
    opacity:0;
}

.slider_nav {
    text-align: center;
    border: 10px solid green;
    width:150px;
    margin: 0 auto;
}

.slider_nav span {
    cursor:pointer;
}

* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 33.33%;
  padding: 5px;
}
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}

.carousel-inner img{
	width:100%;
	height:75%;
}
</style>
<script type="text/javascript">  
$(document).ready(function(){
  $("button0").click(function(){
    $("p0").toggle();
  });
});
$(document).ready(function(){
  $("button1").click(function(){
    $("p1").toggle();
  });
});
$(document).ready(function(){
  $("button2").click(function(){
    $("p2").toggle();
  });
});
$(document).ready(function(){
  $("button3").click(function(){
    $("p3").toggle();
  });
});

function slider() {

    function animate_slider(){
        $('.slider #'+shown).animate({
            opacity:0 
        },1000);
        $('.slider #'+next_slide).animate({
            opacity:1.0
        },1000);
        shown = next_slide;
    }

    function choose_next() {
        next_slide = (shown == sc)? 1:shown+1;
        animate_slider();
    }

    $('.slider #1').css({opacity:1}); 
    var shown = 1;
    var next_slide;
    var sc = $('.slider img').length;
    var iv = setInterval(choose_next,3500);
    $('.slider_nav').hover(function(){
        clearInterval(iv); 
    });
    $('.slider_nav span').click(function(e){
        var n = e.target.getAttribute('name');
       
        if(n=='next') {
            next_slide = (shown == sc)? 1:shown+1;
        } else {
            return;
        }

        animate_slider();
    });
}
window.onload = slider;
</script>
</head>
<?php 
  session_start();
  if($_SESSION["email"] == TRUE)
  {
  
  }else{
    header('location:main.php');
  }
?>
<body>
<div class="container-fluid">
<div class="panel panel-info">
<div class="panel-heading" style="text-align:center;"><h2 class="blinking">Food Recipes!!</h2></div>
<div class="panel-body" style="text-align:center;">
 <p class="blinking">FOOD is ingredient that binds us TOGETHER...</p>
</div>
</div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <ul class="navbar-nav">
  <div class="navbar-header">
      <a class="navbar-brand" href="#">FooDies</a>
    </div>
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Recipies</a>
	<div class="dropdown-menu">
	<a class="dropdown-item" href="baking_recipes.html">Baking Recipes</a>
	<a class="dropdown-item" href="#">Breakfast</a>
	<a class="dropdown-item" href="#">Desserts</a>
	<a class="dropdown-item" href="#">Dinner</a>
	<a class="dropdown-item" href="#">Drinks</a>
	<a class="dropdown-item" href="#">Snacks</a>
	<div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Videos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="gallary.html">Gallary</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Add Your Recipes</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
<ul class="navbar-nav ml-auto">
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</ul>
</nav>
     <header>  
      <div class="slider">  
      <ul class="slides">  
      <li><img id="1" src="assets/img/pasta1.jpg" width="100%"/></li>  
      <li><img id="2" src="assets/img/maggie.jpg"  width="100%" height="100%"/></li>  
      <li><img id="3" src="assets/img/pavwada.jpg"  width="100%" height="100%"/></li> 
      <li><img id="4" src="assets/img/southindia.png"  width="100%" height="100%"/></li>  
      <li><img id="5" src="assets/img/Pizza.jpg"  width="100%" height="100%"/></li>   
      </ul>  <br>
      </div>               
    </header>  

	<div id="demo" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
	<li data-target="#demo" data-slide-to="0" data-ride="carousel">
	<li data-target="#demo" data-slide-to="1" data-ride="carousel">
	<li data-target="#demo" data-slide-to="2" data-ride="carousel">
	<li data-target="#demo" data-slide-to="3" data-ride="carousel">
	</ul>
	<div class="carousel-inner">
	<div class="carousel-item active">
	<img src="assets/img/delish.jpg" alt="Delish" width="100%" height="150">
	<div class="carousel-caption">
	<h3>Los Angeles</h3>
	<p>We had such great time in LA!</p>
	</div>
	</div>
	<div class="carousel-item">
      <img src="assets/img/juice.jpg" alt="Chicago" width="100%" height="150">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="assets/img/cake.jpg" alt="Chicago" width="100%" height="150">
      <div class="carousel-caption">
        <h3>Bread Recipes</h3>
        <p>See how to make bread at home. Recipes for white, wheat, and more with photos, video, and tips to help you make them. Bread machine versions, too!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="assets/img/chickenfood.jpg" alt="New York" width="100%" height="150">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
	<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
	<span class="carousel-control-next-icon"></span>
	</a>
</div>
<br>

<div class="p-3 pd-3">
<div class="row shadow p-4 mb-4 bg-white">
<div class="col-sm-3 col-md-6 col-lg-4 col-xl-5"><button0><h2 class="pointer">Maharastrian Thali</h2></button0>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
<div class="col-sm-9 col-md-6 col-lg-8 col-xl-7">
<p0><img class="img1" src="assets/img/mhthali.jpg" alt="Image" style="width: 500px";></p0>
</div>
</div>	

<div class="row shadow-lg p-4 mb-4 bg-white">
<div class="col-sm-9 col-md-6 col-lg-8 col-xl-7">
<p1><img class="img1" src="assets/img/pujabithali.jpeg" alt="Image" style="width: 500px";></p1></div>
<div class="col-sm-3 col-md-6 col-lg-4 col-xl-5"><button1><h2 class="pointer">Punjabi Thali</h2></button1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>
<div class="row shadow p-4 mb-4 bg-white">
<div class="col-sm-3 col-md-6 col-lg-4 col-xl-5"><button2><h2 class="pointer">Pasta</h2><button2>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
<div class="col-sm-9 col-md-6 col-lg-8 col-xl-7">
<p2><img class="img1" src="assets/img/pasta.jpg" alt="Image" style="width: 500px";></p2>
</div>
</div>	
<div class="row shadow-lg p-4 mb-4 bg-white">
<div class="col-sm-9 col-md-6 col-lg-8 col-xl-7">
<p3><img class="img1" src="assets/img/Pizza.jpg" alt="Image" style="width: 500px";></p3></div>
<div class="col-sm-3 col-md-6 col-lg-4 col-xl-5"><button3><h2 class="pointer">Pizza</h2></button3>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>

<div class="panel panel-info">
<div class="panel-heading" style="text-align:center;"><h2>Bread Food!</h2></div><br>
<div class="panel-body">
<div class="row">
<div class="col-sm">
<img class="rounded-circle" src="assets/img/bread.jpg" alt="Image" style="width: 250px;"></div>
<div class="col-sm">
<img class="rounded-circle" src="assets/img/image.jpg" alt="Image" style="width: 250px;"></div>
<div class="col-sm">
<img class="rounded-circle" src="assets/img/Mexican.jpg" alt="Image" style="width: 250px;"></div>
<div class="cl-sm">
<img class="rounded-circle" src="assets/img/spicy.jpeg" alt="Image" style="width: 250px;"></div>
</div></div>
</div>
</div>

<div class="container">
  <h3 style="text-align: center;">Welcome <?php echo $_SESSION["email"];?></h3>
</div>

<div class="table-responsive-md">
<table class="table table-md table-hover">

<thead class="thead-dark">
  <tr class="pointer table-md">
  <th>
  <h2><font color="#8B0000"> Foo</font><font color="FF8C00">Dies</font><font color="yellow"> :)</font>
  </h2>
  </th>
    <th style="font-size:30px; color:brown;">Home</th>
    <th style="font-size:30px; color:brown;">Recipes</th>
    <th style="font-size:30px; color:brown">About us</th>
    <th style="font-size:30px; color:brown">Contact</th>
  </tr>
</thead>
<br>
  <tr class="table-light">
  <p3>
  <td> </td>
    <td>Recipes</td>
    <td>Cake Recipes</td>
    <td>Students</td>
    <td>8230756482</td>
  </p3>
  </tr>
  <tr class="table-light">
  <td> </td>
    <td>Videos</td>
    <td>Soup Recipes</td>
    <td>SE COMPS</td>
    <td>3467992308</td>
  </tr>
  <tr class="table-light">
  <td> </td>
    <td>Gallery</td>
    <td>Salad Recipes</td>
    <td>At SPIT</td>
    <td> </td>
  </tr>
  <tr class="table-light">
  <td> </td>
    <td>Registration</td>
    <td>Baking Recipes</td>
    <td> </td>
    <td> </td>
  </tr>

</table>
</div></div>
</body>
</html>
