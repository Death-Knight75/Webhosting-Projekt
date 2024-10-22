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
    background: #000;
    text-align: center;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    position: relative;
}
.our-team img{
    width: 100%;
    height: auto;
    transition: all 0.55s ease 0s;
}
.our-team:hover img{ opacity: 0.5; }
.our-team .team-content{
    padding: 5px 10px 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    opacity: 0;
    transform: rotate(45deg) translate(-50%, -50%);
    transform-origin: 0 0;
    transition: all 0.55s ease 0s;
}
.our-team:hover .team-content{ opacity: 1; }
.our-team .team-content:before,
.our-team .team-content:after{
    content: "";
    width: 400px;
    height: 2px;
    background: #95ccea;
    position: absolute;
    top: 0;
    left: 10px;
    transform: translateX(100%);
    transition: all 0.55s ease 0s;
}
.our-team .team-content:after{
    top: auto;
    left: auto;
    bottom: 0;
    right: 10px;
    transform: translateX(-100%);
}
.our-team:hover .team-content:before,
.our-team:hover .team-content:after{
    transform: translate(0, 0);
    transition-delay: 0.15s;
}
.our-team .title{
    font-size: 20px;
    font-weight: 400;
    color: #fff;
    text-transform: uppercase;
    margin: 0;
}
.our-team .title:before,
.our-team .title:after{
    content: "";
    width: 2px;
    height: 300px;
    background: #95ccea;
    position: absolute;
    top: 10px;
    right: 0;
    transform: translateY(100%);
    transition: all 0.55s ease 0s;
}
.our-team .title:after{
    top: auto;
    right: auto;
    bottom: 10px;
    left: 0;
    transform: translateY(-100%);
}
.our-team:hover .title:before,
.our-team:hover .title:after{
    transform: translate(0, 0);
}
.our-team .post{
    display: block;
    padding: 5px 10px;
    background: #95ccea;
    font-size: 17px;
    font-weight: 700;
    color: #000;
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
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <img src="img/muhib.jpg">
                <div class="team-content">
                    <h3 class="title">Muhib</h3>
                    <span class="post">Owner</span>
                    <span class="post">Web Developer</span>
					<li><a href="#" class="fa fa-facebook-square"></a> . <a href="#" class="fa fa-google-plus-square"></a> . <a href="#" class="fa fa-instagram"></a> . <a href="#" class="fa fa-linkedin-square"></a></li>
                </div>
            </div>
        </div>
 
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <img src="img/carsten.jpg">
                <div class="team-content">
                    <h3 class="title">Carsten</h3>
                    <span class="post">Owner</span>
                    <span class="post">Web Designer</span>
					<li><a href="#" class="fa fa-facebook-square"></a> . <a href="#" class="fa fa-google-plus-square"></a> . <a href="#" class="fa fa-instagram"></a> . <a href="#" class="fa fa-linkedin-square"></a></li>
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
	