<?php

    include 'index.php';
 	
 	if(isset($_POST['os'])){
 		$os = $_POST['os'];
 		echo $os;
 	} else {
 		die('dada');
 	}
    
?>