<?php
//API URL
$url = 'https://www.comuniazo.com/ajax/balance?user='.$_GET['user'].'&money='.$_GET['money'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

$headers = [
    'Accept: */*',
    'Accept-Language: es-ES,es;q=0.9',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.79',
    'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
    'Host: www.comuniazo.com',
    'Referer: https://www.comuniazo.com/comunio/dinero',
    'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0',
    'X-Requested-With: XMLHttpRequest'
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec($ch);
echo json_encode($server_output);
curl_close ($ch);
?>