# PHP Lathund

#### Elapsed hours since date-hour

```
$datetime = '2018-08-16 15:20';
$now_date_time = strtotime(date("Y-m-d H:i"));
$last_date_time = strtotime($datetime);
$elapsedHours = floor(($now_date_time-$last_date_time)/3600);

 echo $elapsedHours . ' timmar sedan vattning' . '<br>'; 

 echo  $datetime . '<br>';	
```
#### Connect

##### SQL-request
include('connect.php');

..content

$conn->close();

##### connect.php
$servername = "localhost";
$username = "*";
$password = "*";
$dbname = "*";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
