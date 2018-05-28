<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Short Your URL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  
  html {
      overflow: scroll;
      overflow-x: hidden;
    }
  ::-webkit-scrollbar {
      width: 0px;  /* remove scrollbar space */
      background: transparent;  /* optional: just make scrollbar invisible */
    }
  /* optional: show position indicator in red */
  ::-webkit-scrollbar-thumb {
      background: #FF0000;
   }
  
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
	  
   }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="">BITLINKS</a>
    </div>    
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Short Your Link</h1>  
  <p>Paste Your Info Below This</p>  
  
  <!-- Form Start -->
  <form action="" method="post">
  <div class="form-group">
    <div class="col-xs-3">
    <label for="exampleFormControlInput1">Movie Title</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
	</div>
  </div>
  <div class="form-group">
    <div class="col-xs-3">
    <label for="exampleFormControlInput1">Genre | Rate</label>
    <input type="text" name="year" class="form-control" id="exampleFormControlInput1">
	</div>
  </div>
  <div class="form-group">
    <div class="col-xs-3">
    <label for="exampleFormControlSelect1">Movie Quality</label>
    <select name="quality" class="form-control" id="exampleFormControlSelect1">
	  <option></option>
      <option value="Bluray">BLURAY</option>
      <option value="WEB-DL">WEB-DL</option>
	  <option value="WEBRip">WEBRIP</option>
      <option value="HDRip">HDRIP</option>
	  <option value="HDTV">HDTV</option>
      <option value="HDTC">HDTC</option>
      <option value="HDTS">HDTS</option>
	  <option value="HDCAM">HDCAM</option>
	  <option value="DVDRip">DVDRip</option>
	  
    </select>
	</div>
  </div>  
  <div class="form-group">
    <div class="col-xs-3">
    <label for="exampleFormControlInput1">Movie Link</label>
    <input type="text" name="link" class="form-control" id="exampleFormControlInput1">
	</div>
  </div> 
  <br><br><br>
  <input type="submit" name="submit" value="Generate" class="btn btn-warning" />
  
  </form>
  <!-- Form End -->
  
</div>



<!-- Start Functiom Here -->
<?php
if(isset($_POST['submit'])){

//GET DATA FROM INPUT FORM
$title = $_POST['title'];
$year = $_POST['year'];
$quality = $_POST['quality'];
$link = $_POST['link'];

$long_url = urlencode($link);

$long_url = urlencode('yourdestinationlink.com');
$api_token = 'ab87d19f13db2934550640b86912f0c3d4211345';
$api_url = "https://shrtfly.com/api?api={$api_token}&url={$long_url}&alias=CustomAlias";
$result = @json_decode(file_get_contents($api_url),TRUE);
if($result["status"] === 'error') {
 echo $result["message"];
} else {
 echo $result["shortenedUrl"];
} 


<!-- End Functiom Here -->



<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div align="center">
      <h2>Your Short Link Here</h2>      
	  <p><?php echo $title; ?>(<?php echo $quality; ?>)</p> 
	  <p><?php echo $year; ?></p> 
      <p><a href="<?php echo $short_url; ?>"><span><?php echo $short_url; ?></span></a></p> 
	   <br><br>
         <span class="label label-warning">create by alisukri</span> 

    </div>   
  </div>
</div>

<?php
}
?>


</body>
</html>

