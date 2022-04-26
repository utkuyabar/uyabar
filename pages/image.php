<?php 
	error_reporting(0);
    session_start();
    $nick = trim($_GET['imagekadi']);
if (!$_SESSION[$nick]) {
 
$apifor = "base_api.php?resim=aHR0cHM6Ly9lbmNyeXB0ZWQtdGJuMC5nc3RhdGljLmNvbS9pbWFnZXM/cT10Ym46QU5kOUdjUkZtb3dFV0pRc1J0WDc1ZU9sdVd4UGdFbzFFcWo5NmliMk5RJnVzcXA9Q0FV";
echo "OK";


   if ($apifor=="error") {
       session_destroy();
    exit;
     
   } 
   $_SESSION[$nick]= $apifor;

} else { 
       echo "OK";
}

$_SESSION['photo']= $_SESSION[$nick];
$_SESSION['kadi']= $nick;
?>