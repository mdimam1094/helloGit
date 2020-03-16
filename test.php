<?php

echo "hello world";
ini_set("allow_url_fopen", 1);
$json = file_get_contents('https://bubt.edu.bd/global_file/getData.php?id=17181103096&type=stdVerify');
$obj = json_decode($json);
echo $obj->sis_std_name;
echo "Hello";


// $ch = curl_init();
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_URL, 'https://bubt.edu.bd/global_file/getData.php?id=17181103096&type=stdVerify');
// $result = curl_exec($ch);
// curl_close($ch);

// $obj = json_decode($result);
// echo $obj->sis_std_name;

?>