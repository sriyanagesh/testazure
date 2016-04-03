<html>
<body>
<?php
								$serverName = "joaquinateam12.database.windows.net";
								$connectionInfo = array( "Database"=>"Joaquinateam12", "UID"=>"admin12@joaquinateam12", "PWD"=>"Trotters12");
								$conn = sqlsrv_connect( $serverName, $connectionInfo);

								if( $conn ) {
								echo "Connection established.<br />";
								}
								else {
								die(print_r(sqlsrv_errors(), true));
								}
								
							//	mssql_select_db('joaquinateam12',$conn);

								$sql = "select * from dbo.Dentist";
								$stmt = sqlsrv_query($conn, $sql);
								if( !$stmt) {
								die(print_r(sqlsrv_errors(), true));
								}
								while($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
								print_r $row;
								}
					//			$row= mssql_fetch_row($stmt);
					//			echo "before foreach";
					//			foreach($row as $s){
					//				echo $s;
					//			}
								echo "hello mummy!";

?></body></html>
