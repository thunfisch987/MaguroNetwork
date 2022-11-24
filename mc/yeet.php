<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage System</title>
</head>

<body>
    <?php

    $url = "http://mc.phnx.xyz:30814/networkElement/integrateddynamics/part/4";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    $resp2 = json_decode($resp);
    $value = $resp2->value;
    $counter = 0;
    foreach ($value as $yeet) {
        if (property_exists($yeet, 'resourceLocation')) {
            echo "<p>" . explode(":",$yeet->resourceLocation)[1] . ": " . $yeet->count . "</p>";
        } else {
            $counter++;
        }
    }
    echo "<p>" . "LEER: " . $counter . "</p>";
    ?>
</body>

</html>