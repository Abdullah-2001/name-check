<?php
$name = $_POST["name"];
$url = "https://www.companies999.co.uk/ejax-name-check?name=".$name;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
$json = curl_exec($ch);
if (!$json) {
    echo curl_error($ch);
}
curl_close($ch);
$result = json_decode($json);
print_r(json_encode($result));
// echo $NameRequested = $result -> NameRequested;
// echo '<br>';
// echo $NameStatus = $result -> NameStatus;
// $orderdetailArray = array();
// $orderdetailArray[0] = array('NameRequested' => $result -> NameRequested, 'NameStatus' => $result -> NameStatus);
// print_r($result);