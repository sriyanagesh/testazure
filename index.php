<html>
<body>
<?php
								$serverName = "joaquinateam12.database.windows.net";
								$connectionInfo = array( "Database"=>"Joaquinateam12", "UID"=>"admin12@joaquinateam12", "PWD"=>"Trotters12");
								$conn = sqlsrv_connect( $serverName, $connectionInfo);

								if( $conn ) {
								echo "Connection established.<br />";
								}else{
								echo "Connection could not be established.<br />";
								die( print_r( sqlsrv_errors(), true));
								}

								echo "hello mummy!";

?></body></html>
