<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>
    "origin=bekasi&destination=brebes&weight=1700&courier=tiki",
    CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: aead7d664de4f808b857834470d2e10e"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $array_response = json_decode($response, true);
    $dataOngkir = $array_response["rajaongkir"];

    echo "<pre>";
    print_r($dataOngkir);
    echo "</pre>";
}
