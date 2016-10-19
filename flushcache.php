<?php
/**
 * Simple Script in PHP to clear sucuri's cloudproxy cache via php 
 * 
 * Author: Salvador Aguilar
 * Email: sal.aguilar81@gmail.com
 * Web: salrocks.com
 */

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://waf.sucuri.net/api?v2',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        // this is the Sucuri CloudProxy API key for this website
        k => 'your-cloudproxy-api-key-goes-here',
        // this is the Sucuri CloudProxy API secret for this website
        s => 'your-cloudproxy-api-secret-goes-here',
        // this is the Sucuri CloudProxy API action for this website
        a => 'clear_cache'
    )
));
// Send the request & save response to $resp
$resp = curl_exec($curl);

echo '<pre>' . $resp . '</re>';
// Close request to clear up some resources
curl_close($curl);