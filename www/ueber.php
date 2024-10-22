<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meck Web-Hosting</title>
    <meta name="description" content="Beautiful modern hosting HTML template integrated with WHMCS.">
    <meta name="author" content="AALayouts">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/leh.css" rel="stylesheet">
    <link href="css/vegas.min.css" rel="stylesheet">
	<link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
<style>
.our-team{ text-align: center; }
.our-team .pic{
    display: inline-block;
    border-radius: 50%;
    margin-bottom: 20px;
    overflow: hidden;
    z-index: 1;
    position: relative;
}
.our-team .pic:before,
.our-team .pic:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    box-shadow: 100px 0 0 rgba(255, 255, 255, 0.01) inset, 0 100px 0 rgba(255, 255, 255, 0.01) inset, -100px 0 0 rgba(255, 255, 255, 0.01) inset, 0 -100px 0 rgba(255, 255, 255, 0.01) inset;
    position: absolute;
    top: 0;
    left: 0;
    transition: all 300ms linear 0s;
}
.our-team .pic:after{
    transform: rotate(45deg);
}
.our-team:hover .pic:after,
.our-team:hover .pic:before{
    box-shadow: 5px 0 0 rgba(255, 0, 0, 0.5) inset, 0 5px 0 rgba(252, 150, 0, 0.5) inset, -5px 0 0 rgba(0, 255, 0, 0.5) inset, 0 -5px 0 rgba(0, 150, 255, 0.5) inset;
}
.our-team .pic img{
    width: 100%;
    height: auto;
    transform: scale(1);
    transition: all 300ms linear 0s;
}
.our-team:hover .pic img{
    transform: scale(1.1);
}
.our-team .title{
    display: block;
    font-size: 20px;
    font-weight: 700;
    color: #d33f49;
    letter-spacing: 1px;
    margin: 0 0 5px 0;
}
.our-team .post{
    display: block;
    font-size: 15px;
    color: #333;
    text-transform: capitalize;
}
.our-team .social{
    padding: 0;
    margin: 25px 0 0 0;
    list-style: none;
}
.our-team .social li{
    display: inline-block;
    margin-right: 5px;
}
.our-team .social li a{
    display: block;
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 0 15px 0 15px;
    background: #d33f49;
    font-size: 15px;
    color: #fff;
    transition: all 300ms linear 0s;
}
.our-team:hover .social li a{
    border-radius: 15px 0 15px 0;
    background: #eca400;
}
@media only screen and (max-width: 767px){
    .our-team{ margin-bottom: 30px; }
}
</style>
  </head>
  <body class="overlay">

    <?php include 'includes/top.php' ?>

    <div class="header">

    <nav id="scroll" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="logo2.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="web-hosting.php">Web Hosting</a></li>
            <li><a href="virtual-private-servers.php">VPS</a></li>
            <li><a class="nvbtn" href="#"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; Client Area</a></li>

          </ul>
        </div>
      </div>
    </nav>
	<h1><font color="#b7b7b7">Unser</font> <font color="#3994a8">Team</font></h2>
 
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="our-team">
                <div class="pic">
                    <img src="img/muhib.jpg">
                </div>
                <h3 class="title">Muhib</h3>
				<font color="#fff">
                <span class="post"><font color="#fff">Owner</font></span>
                <span class="post"><font color="#fff">Web Developer</font></span>
				</font>
                <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
					<li><a href="#" class="fa fa-instagram"></a></li>
					<li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
 
        <div class="col-sm-4">
            <div class="our-team">
                <div class="pic">
                    <img src="img/carsten.jpg">
                </div>
                <h3 class="title">Carsten</h3>
				
                <span class="post"><font color="#fff">Owner</font></span>
                <span class="post"><font color="#fff">Web Designer</font></span>
				
                <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
					<li><a href="#" class="fa fa-instagram"></a></li>
					<li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
	
    <?php include 'includes/footer.php' ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/leh.js"></script>
    <script>
    $("body").vegas({
      slides: [
          { src: "img/bc1.jpg" },
          { src: "img/bc2.jpg" },
          { src: "img/bc3.jpg" },
          { src: "img/bc4.jpg" }
      ],
      transition: 'random',
      timer: false,
      overlay: 'img/overlay.png',
      delay: 10000,
      align: 'center',
    });
    </script>
  </body>
</html>
	