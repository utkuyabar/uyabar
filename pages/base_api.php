<?php
$link=base64_decode($_GET['resim']);
function file_download($link)
{

$yol = $link;
 
$curl = curl_init($link);

 
curl_setopt($curl, CURLOPT_HEADER,0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_0);

 
print_r(curl_exec($curl));
curl_close($curl);

 
}
 
 


$size = filesize($link);
header ('Content-Type: image/x-icon');
header ("Content-length: $size");
echo file_download($link);




?>