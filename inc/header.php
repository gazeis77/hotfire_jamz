<!DOCTYPE html>
<html>
  <head>
    <title>Hotfire Jamz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   
  </head>
  <body>

<!--Navbar-->
<div class="containter">    
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
<!--Navbar Collapse-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

    <a href="index.php">
      <img class="logo" src="img/hotfire_jamz.png">
    </a> 

      <div class="collapse navbar-collapse">
        <div class="listening-to">
          <p>Currently listening to: 
            <span id="recent_artist"></span> - 
            <span id="recent_title"></span> from the album 
            <a id="recent_url" target="_blank">
            <span id="recent_album"></span>
            </a>
          </p>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
               <a data-toggle="dropdown" data-target="#">Features<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Worth Checking Out</a></li>
                  <li><a href="#">Theory</a></li>
                </ul>
              <li><a href="#">Quick Reviews</a></li>
              <li><a href="#">About</a></li>
            </li>
         </ul>
       </div>
      </div>
    </div>
  </div>

  