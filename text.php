<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_URL, "https://www.sinemalar.com/filmler/vizyondaki");
$cikti = curl_exec($curl);
preg_match_all('@https://www.sinemalar.com/film/(.*?)/(.*?)@si', $cikti, $link1);


$dosyaadi = "C:\bot.txt"; //Dosyanın bulunduğu dizin
$file = fopen( $dosyaadi, "w" );

if( $file == false ) {
   echo ( "Dosya bulunaamadı.");
   exit();
}

//https://github.com/Batuhan4/

//print_r($link1[0]);

foreach ($link1[0] as $key => $yeni) {
	$ads = str_ireplace("https://www.sinemalar.com/film/", "", "$yeni");
	$sds = str_ireplace("/", "", "$ads");
	fwrite($file, "$sds\r\n");
	
	//echo $sds."<br/>"

	;}

	$lines = file('C:\bot.txt');
	$lines = array_unique($lines);

	file_put_contents('C:\bot.txt', implode($lines));

	fclose($file);








curl_close($curl);

