<?php
	
	$apiKey = urlencode('your-api-key');
	$message = rawurlencode('your massege');
	$mobile = 9572153720;
	$ch = curl_init('https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey='.$apiKey.'&senderid=CANTTB&channel=2&DCS=0&flashsms=0&number='.$mobile.'&text='.$message.'&route=clickhere');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 2);
	$response = curl_exec($ch);
	curl_close($ch);
	
?>