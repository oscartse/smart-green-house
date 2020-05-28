<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>SmartGreenHouse</title>
    <base href = "smartgreenhouse.gear.host">

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">
    <style>
    .center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 18px;
    }
    .overflow-centered img {
    position: absolute;
    top: -9999px;
    bottom: -9999px;
    left: -9999px;
    right: -9999px;
    margin: auto;
}

.overflow-centered {
    position:relative;
    overflow:hidden;
}
.profile-container {
    width: 20%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    margin-left: 5%;
    position: absolute;
}
.profile-image {
    padding-top: 100%;
    width: 100%;
    bottom:0;
    left: 0;
    right: 0;
    border-top-left-radius: 5%;
    border-top-right-radius: 5%;
    border: 2px solid;
    border-bottom: 0px;
    border-color: #ccc;
    position: absolute;
    margin-left: auto;
    margin-right: auto;
}

.element-nav{
    height: 65px;
    border-top: 3px solid;
    border-color: #ccc;
    position: relative;
}

.banner {
    height: 300px;
    width: 100%;
    overflow: hidden;
    position: relative;
    border-bottom: 2px solid;
    border-color: #ccc;
    margin-bottom: 20px;
}

.banner-image {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
}

.banner-title {
    position: relative;
    height: 100%;
    width: 100%;
    padding-left: 10%;
    color: white;
    background: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
    background: -o-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
    background: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
    background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.2))
}

.banner-title h1 {
    position: absolute;
    bottom: 10%;
    font-size: 3.5em;
}

.tab-option {
    font-size: 18px;
    padding-top: 10px;
    padding-bottom: 10px;
}



.portrait {
    width: 100%;
}
.landscape {
    height: 100%;
}
    </style>
  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Smart Greenhouse</a>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="javascript:history.back()">Overview</a>
               <a class="nav-link active" href="detail.php">Detail<span class="sr-only">(current)</span></a>
            <li class="nav-item">
              <a class="nav-link" target="blank" href="">Logout</a>
            </li>
          </ul>
        </nav>
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <div class="containerfluid">
    <div class="banner" style="width:100%;">
        <img src="https://www.netafim.co.za/assets/dynamic/3/gal/12/13/995x443/13_greenhouse.jpg" class="fit banner-image" >
        <div class="banner-title">
            <h1>Smart Green House</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

    <div class="content col-md-10" style="font-size: 16px">
    <h2> Brief description of the proposed IoT prototype and its functions/features</h2>
    <p>The Smart Greenhouse contains temperature sensor, humidity sensor, light detector, to monitor the condition of the greenhouse.
        All the data about temperature, humidity and light will be recorded and upload to our customized website for checking and analysing.
        Our Smart Greenhouse can monitor the light of the environment and change to the best condition for the plant to grow.When the
        light sensor detect that the lighting in the greenhouse is lower than the minimum requirement, the LED light bulb will turn on automatically.
        When the humidity sensor and temperature sensor detect that the value inside greenhouse exceed certain value, the fan will automatically turn on.
        Besides, user can also set the best condition of the plant with remote control by turning on/off the light/dan
      </p>

    <h2>Design and Structure</h2>
    <h4>Design</h4><br><div><img src="./design.png" width="800" height="600" class="img-fluid" alt="Generic placeholder thumbnail">
      <div><br>
    <h4>Block Diagram</h4>
    <div>
      <img src="./block.png" width="600" height="800" class="img-fluid" alt="Generic placeholder thumbnail">
      <div>
    <h2>Expected Delivery</h2>
    <p>Big Data Analysis with different set of data can be traded in the community.For example,
       if you want to farm a Japanese taste Strawberry, you can buy the data from others and input them as environmental parameters of
       your own greenhouse so as to simulate the japanese style.
     </p>
       <img src="./possible.png" width="600" height="800" class="img-fluid" alt="Generic placeholder thumbnail">
    </div>
</div>
        </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
