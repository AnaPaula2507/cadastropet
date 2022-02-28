<?php 

		try {

			$conn = new PDO("mysql:dbname=petshop;host=localhost", "root", "");
			
			
		} catch (Exception $e) {
			echo "Erro na conexão".$e->getMessage();
		}

?>