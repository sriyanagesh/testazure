<html>
<body>
<?php
								$serverName = "joaquinateam12.database.windows.net";
								$connectionInfo = array( "Database"=>"Joaquinateam12", "UID"=>"admin12@joaquinateam12", "PWD"=>"Trotters12");
								$conn = mssql_connect( $serverName, 'admin12@joaquinateam12','Trotters12');

								if( $conn ) {
								echo "Connection established.<br />";
								}
								mssql_select_db('joaquinateam12',$conn);

								$sql = "select * from dbo.Dentist";
								$stmt = mssql_query($sql,$conn);
								$row= mssql_fetch_row($stmt);
								echo "before foreach";
								foreach($row as $s){
									echo $s;
								}
								echo "hello mummy!";

?></body></html>
