<?php

	function data_url($url){
		$client=curl_init($url);
		curl_setopt($client, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($client, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($client, CURLOPT_RETURNTRANSFER,true);
		$respon=curl_exec($client);
		return json_decode($respon);
		//$result=json_decode($respon);
	}
	//var_dump($result);
	
	$url_glo_pos="https://api.kawalcorona.com/positif/";
	$result=data_url($url_glo_pos);
	$jumlah_positif=$result->value;

	$url_glo_sem="https://api.kawalcorona.com/sembuh/";
	$result=data_url($url_glo_sem);
	$jumlah_sembuh=$result->value;

	$url_glo_mng="https://api.kawalcorona.com/meninggal/";
	$result=data_url($url_glo_mng);
	$jumlah_meninggal=$result->value;

	$url_indo="https://api.kawalcorona.com/indonesia/";
	$result=data_url($url_indo);
	$positif=$result[0]->positif;
	$sembuh=$result[0]->sembuh;
	$meninggal=$result[0]->meninggal;

	$url_kalteng="https://api.kawalcorona.com/indonesia/provinsi/";
	$result=data_url($url_kalteng);

	$ktpositif=$result[15]->attributes->Kasus_Posi;
	$ktsembuh=$result[15]->attributes->Kasus_Semb;
	$ktmeninggal=$result[15]->attributes->Kasus_Meni;
?>

