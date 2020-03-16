<?php

echo "hello world";
ini_set("allow_url_fopen", 1);
$json = file_get_contents('https://bubt.edu.bd/global_file/getData.php?id=17181103096&type=stdVerify');
$obj = json_decode($json);
echo $obj->sis_std_name;



?>