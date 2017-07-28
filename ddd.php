<?php
ini_set('date.timezone','Asia/Shanghai');
$to="shenzd@lizi.com";
$title="ddd";
$body="hello";
$from="admin@szd.com";
mail($to,$title,$body,$from);
$file=fopen("time.log","a");
$time=date("Y-m-s H:i:s");
fwrite($file,"$time email sending...\n");
fclose($file);

?>
