<?php

    function ConnectToDatabase(){

        $user = 'root';
        $password ='13kandageHall20';

        try{

            $connection = new PDO('mysql:host=localhost;dbname=freshcity', $user, $password);

        }catch(PDOException $e){

            print("Error: ".$e->getMessage()."<br/>");
            die();
        }

        return $connection;

    }

	
	function ConnectToDatabase(){
		
		$user = "root";
		$pass = "password";
		
		$connection = newPDO("mysql:host=localhost;dbname=myDB", $user, $pass);
		
		return $connection;
		
	}
?>