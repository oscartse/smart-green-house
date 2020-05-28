<!DOCTYPE html>
<html>
<body>

<?php
    
    $servername = "mysql2.gear.host";
    $username = "smartgreenhouse";
    $password = "Nj9X?CY_4K21";
    $dbname = "smartgreenhouse";


    date_default_timezone_set('Asia/Hong_Kong');
    $humidity = $_GET['humidity'];
    $temperature = $_GET['temperature'];
    $fan_status = $_GET['fan_status'];
    $bulb_status = $_GET['bulb_status'];

    $date = date("Y-m-d G:i");
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `house_condition`
            (`timestamp`, `humidity`, `temperature`, `fan_status`, `bulb_status`)
            VALUES ('$date', '$humidity', '$temperature', '$fan_status', '$bulb_status')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>

</body>
</html>
