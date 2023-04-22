<?php
$username = "littlebitgayTV";
$url = "https://api.twitch.tv/helix/streams?user_login=" . $username;
$authtoken = "Authorization: " . file_get_contents("./.twitchtoken");
echo $authtoken

//init curl
$curl = curl_init($url);
//url setzen
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Client-Id: wy7kx5tiaxglutzj1uucapo0vne0rm",
   $authtoken
);

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$respjson = json_decode($resp);
echo "yeet";
var_dump($respjson);
?>