<?php

$fp = fopen ("path.php", "r");
$path = fgets ($fp, 255);
fclose ($fp);


$_SESSION['path'] = $path;


  
  //démarrage des sessions
  if(session_id() == '') {
	  session_start();
	}


setcookie("langue", 'arabe' , time() + 3600 * 24 * 7 , '/' , '', false , true);

                
header('location:'.$path.'index.php');

exit();
                
?>