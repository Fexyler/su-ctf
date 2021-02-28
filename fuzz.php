<?php
$i=1;
$ac = fopen("sonuc.txt","a+");
while(true){
$baglan = file_get_contents("http://167.172.169.173:3550/page/".$i);
if($baglan == "|END|"){
die();
}
echo trim($baglan);
fwrite($ac,$baglan);
usleep(200000);
$i++;
}

fclose($ac);
