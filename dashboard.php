<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

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
              <a class="nav-link active" href="#">Overview<span class="sr-only">(current)</span></a>
               <a class="nav-link" href="detail.php">Detail</a>
            <li class="nav-item">
              <a class="nav-link" target="blank" href="">Logout</a>
            </li>
          </ul>
        </nav>
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1>IERG 4230 Mnin Project </h1> 
          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
            <div class="container">
              <img src="./temperature.png" width="200" height="200" class="img-fluid" alt="Generic placeholder thumbnail">
              </div>
              <h4>Temperature</h4>
              <div class="text-muted"><?php
$servername = "mysql2.gear.host";
$username = "smartgreenhouse";
$password = "Nj9X?CY_4K21";
$dbname = "smartgreenhouse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT temperature FROM `house_condition` ORDER BY timestamp DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        print "<p>".$row['temperature']."</p>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  </div>
            </div>
          <div class="col-6 col-sm-3 placeholder">
            <div class="container">
              <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/393081-200.png" width="200" height="200" class="img-fluid" alt="Generic placeholder thumbnail">
              </div>
              <h4>Humidity</h4>
              <div class="text-muted"><?php
$servername = "mysql2.gear.host";
$username = "smartgreenhouse";
$password = "Nj9X?CY_4K21";
$dbname = "smartgreenhouse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT humidity FROM `house_condition` ORDER BY timestamp DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        print "<p>".$row['humidity']."</p>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  </div>
            </div>
          <div class="col-6 col-sm-3 placeholder">
            <div class="container">
              <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/36185-200.png" width="200" height="200" class="img-fluid" alt="Generic placeholder thumbnail">
              </div>
              <h4>Toggle the Fan</h4>
              <button type="button" class="btn btn-success">On</button>
            </div>
                      <div class="col-6 col-sm-3 placeholder">
            <div class="container">
              <img src="./bulb.png" width="200" height="200" class="img-fluid" alt="Generic placeholder thumbnail">
              </div>
              <h4>Toggle the Bulb</h4>
              <button type="button" class="btn btn-success">Off</button>
            </div>
          </section>
          <h2>Recent Condition</h2>
          <div class="table-responsive">
            <table class="table table-striped">
<?php
$servername = "mysql2.gear.host";
$username = "smartgreenhouse";
$password = "Nj9X?CY_4K21";
$dbname = "smartgreenhouse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM house_condition";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        print "<tr><td>".$row['timestamp']."</td><td>".$row['humidity']."</td><td>".$row['temperature']."</td><td>".$row['fan_status']."</td><td>".$row['bulb_status']."</td></tr>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  
              <thead>
                <tr>
                  <th>Time</th>
                  <th>Humidity</th>
                  <th>Temperature</th>
                  <th>Fan status</th>
                  <th>Light status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12:00</td>
                  <td>80.00%</td>
                  <td>24.00C</td>
                  <td>On</td>
                  <td>Off</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

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
