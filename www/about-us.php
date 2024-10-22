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
.our-team{
    border: 1px solid #dedede;
    text-align: center;
    color: #8b2635;
    overflow: hidden;
    transition: all 0.3s ease 0s;
}
.our-team:hover{
    background: #8b2635;
    color: #fff;
}
.our-team .pic{ position: relative; }
.our-team .pic img{
    width: 100%;
    height: auto;
    transition: all 0.3s ease 0s;
}
.our-team:hover .pic img{ transform: translateY(-20px); }
.our-team .social{
    width: 20%;
    height: 100%;
    background: #8b2635;
    padding: 20px 0;
    margin: 0;
    list-style: none;
    position: absolute;
    top: 0;
    left: -50%;
    transition: all 0.5s ease 0s;
}
.our-team:hover .social{ left: 0; }
.our-team .social li{ display: block; }
.our-team .social li a{
    display: block;
    padding: 10px 0;
    font-size: 20px;
    color: #fff;
    transition: all 0.5s ease 0s;
}
.our-team .social li a:hover{ color: #ff9b19; }
.our-team .team-content{ padding: 25px 0; }
.our-team .title{
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin: 0 0 10px 0;
}
.our-team .post{
    display: block;
    font-size: 15px;
    text-transform: capitalize;
}
@media only screen and (max-width: 990px){
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
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="img/muhib.jpg">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook-square"></a></li>
                        <li><a href="#" class="fa fa-google-plus-square"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-linkedin-square"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">Muhib</h3>
                    <span class="post">Owner</span>
                    <span class="post">Web Developer</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="img/carsten.jpg">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook-square"></a></li>
                        <li><a href="#" class="fa fa-google-plus-square"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-linkedin-square"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">Carsten</h3>
                    <span class="post">Owner</span>
                    <span class="post">Web Designer</span>
                </div>
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
	