<?php  

//$dosya = fopen("C:\Users\batu\Desktop/bot.txt","r");



$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);




$dosya = @file("C:\bot.txt");
for ($i = 0; $i < count($dosya); $i++) {
     // burada explode, regex vs. kullanarak istedigin islemleri uygulayabilirsin. kolay gelsin
$as    =  $dosya[$i];

$sa=substr($as, 0, -2);


    $cikti = curl_exec($curl);
   
    curl_setopt($curl, CURLOPT_URL, "https://www.sinemalar.com/film/$sa/(.*?)/");
    preg_match_all('@<span class="label">(.*?)</span>@si', $cikti, $link1);



     $tarih =   $link1[0];
    print_r  ($tarih) ;
    echo "</br>";
    echo "</br>";
    //$satir= fgets($yeni);
    //echo $satir;



}
// github: https://github.com/Batuhan4/


curl_close($curl);

?>
