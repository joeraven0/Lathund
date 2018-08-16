# PHP Lathund

#### Elapsed hours since date-hour

```
$datetime = '2018-08-16 15:20';
$now_date_time = strtotime(date("Y-m-d H:i"));
$last_date_time = strtotime($datetime);
$elapsedHours = floor(($now_date_time-$last_date_time)/3600);

 echo $elapsedHours . ' Hours passed: ' . $elapsedHours . '<br>'; 

 echo  $datetime . '<br>';	
```
#### Connect

##### SQL-request
```
	include('connect.php');

	$result = $conn->query(' ...SELECT id FROM... ');
	    if($row = $result->fetch_assoc()) {
	    	
      		echo '...do some stuff i.e. $variable = row[id];...';
      
	    }

	$conn->close();
```

##### connect.php
```
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
```

#### Request DB using AJAX
Replacing innerHTML of echo-string from SQL Query
```
setInterval(function(){ loaddb(); }, 1000);

			
function loaddb() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "myDBquery.php", true);
        xmlhttp.send();    
}
```
