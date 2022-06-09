
<?php
if(!$_POST){
    echo("YANLIŞ SAYFA")
}
else{

    $isim_soyisim=$_POST["isim soyisim"];
    $e_posta=$_POST[" e-posta"];
    $konu=$_POST["konu"];
    $ip=$_SERVER["REMOTE-ADDR"];
}
if(!$isim_soyisim){
    echo("İSİM SOYİSİM BOŞ BIRAKILAMAZ");
}
else{
    if(!$e_posta){
    echo("E-POSTA BOŞ BIRAKILAMAZ");
}

else{
    if(!$e_posta){
    echo("E-POSTA BOŞ BIRAKILAMAZ");
}
else{
    echo("<b>İSİM SOYİSİM:<b>".$isim_soyisim."<br>");
    echo("<b>E-POSTA:<b>".$e_posta."<br>");
    echo("<b>KONU:<b>".$konu."<br>");
}
}
}?>