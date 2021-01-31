<?php
    $url        = 'https://notify-api.line.me/api/notify';
    $token      = 'wflxo6hK6yaADmnjnBJMQ85T3ca2APuQ3leoKzBEp1i';
    $headers    = [
                    'Content-Type: application/x-www-form-urlencoded',
                    'Authorization: Bearer '.$token
                ];
    $fields     = 'message=ใส่ข้อความที่นี่';

    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url);
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec( $ch );
    curl_close( $ch );

    var_dump($result);
    $result = json_decode($result,TRUE);
?>