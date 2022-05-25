<?php 
	include"partial/header.php";
 ?>
 	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <h3 class="navbar-iverse" href="#">j'apprend</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-file-video-o"></i> Tutoriel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#"><i class="fa fa-wpforms"></i> Formation</a>
          </li>
          <li class="nav-item">
          	<a class="nav-link" href="#"><i class="fa fa-book"></i> Blog</a>
          </li>
          <li class="nav-item">
          	<a class="nav-link" href="#"><i class="fa fa-question"></i> Question</a>
          </li>
        </ul>
        
        <div class=" mt-2 mt-md-0">
	          <button data-toggle="modal" data-target="#s" href="#s" class="btn btn-primary" ><i class="fa fa-search"></i></button>
        </div>
            <div class="modal" id="s">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Small modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <p>Modal body text...</p>
              </div>
              <div class="modal-actions">
                <button type="button" class="btn-link modal-action" data-dismiss="modal">
                  <strong>Continue</strong>
                </button>
                <button type="button" class="btn-link modal-action" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
	    </div>
      </div>
    </nav>
    <br/>
    
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/slide1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>j'apprend-le-web</h1>
                <p>
                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="#" role="button">connexion</a>
                  <a class="btn btn-lg btn-danger" href="#" role="button">S'inscrire</a>
                <p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/slide2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>connexion</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Conexion</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/slide3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>---</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <!-- la partie trois =================-->
        <div class="container">
          <div class="row">
            <div class="col-md-4 col">
                <img src="" alt="">
                <a href="">
                  <h4 class="text-center"> PHP & MYSQL</h4>
                </a>
                  
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quam ratione sapiente voluptatum, at expedita, hic earum ullam cum</p>
            </div>
            <div class="col-md-4">
                <img src="" alt="">
                  <a href="">
                    <h4 class="text-center"> JAVASCRIPT & NODEJS</h4>
                  </a>
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quam ratione sapiente voluptatum, at expedita, hic earum ullam cum</p>
            </div>
            <div class="col-md-4">
                <img src="" alt="">
                <a href="">
                  <h4 class="text-center"> HTML & CSS</h4>
                </a>
                  
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quam ratione sapiente voluptatum, at expedita, hic earum ullam cum</p>
            </div>
            <div class="col-md-4">
                <img src="" alt="">
                <a href="">
                  <h4 class="text-center">Sofony</h4>
                </a>
                  
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quam ratione sapiente voluptatum, at expedita, hic earum ullam cum</p>
            </div>
            <div class="col-md-4">
                <img src="" alt="">
                <a href="">
                  <h4 class="text-center"> HTML & CSS</h4>
                </a>
                  
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quam ratione sapiente voluptatum, at expedita, hic earum ullam cum</p>
            </div>
            <div class="col-md-4">
                <img src="" alt="">
                <a href="">
                  <h4 class="text-center"> HTML & CSS</h4>
                </a>
                  
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quam ratione sapiente voluptatum, at expedita, hic earum ullam cum</p>
            </div>
          </div>
        </div>

 <?php 
 	include"partial/footer.php";
  ?>
  