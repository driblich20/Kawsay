	<?php function connection(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "kawsay";
			$conn = new mysqli($servername, $username, $password, $dbname);

			if($conn->connect_error){
					echo "Error al entrar al servidor: ".$conn->connect_error;
			}		
			return $conn;
			}
	?>