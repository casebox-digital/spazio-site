<?php
include 'inc/objects/curl.class.php';

function fb_conversion($eventName, $eId = null, $email = null) {
    // ------------------------------------------------
    // This is a Facebook Conversions API PHP Integration
    // Created by: Gilberto C.
    // InteractiveUtopia.com
    // ------------------------------------------------
    // First, we need to start by obtaining the information that will be sent to Facebook
    // ------------------------------------------------

    // ------------------------------------------------
    // Get Current User IP Address
    if (!empty($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $user_ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $user_ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $user_ip = $_SERVER['REMOTE_ADDR'];
    }

    // ------------------------------------------------
    // Get current page
    $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //echo $actual_link;

    $rndNumber = mt_rand(100000, 999999);
    if (isset($eId)) {
        $eventId = $eId;
    }
    else {
        $eventId = $rndNumber . "." . time();
    }

    // ------------------------------------------------
    // Generate Json code to provide
    $submitJson = '{
        "data": [
                    {
                        "action_source": "website",
                        "event_id": "' . $eventId . '",
                        "event_name": "' . $eventName . '",
                        "event_time": ' . time() . ',
                        "event_source_url": "' . $actual_link . '",
                        "user_data": {
                            "client_ip_address": "' . $user_ip . '",
                            "client_user_agent": "' . $_SERVER['HTTP_USER_AGENT'] . '"
                            "em": "' . hash('sha256', $email) . '",
                        }
                    }
                ], 
                "test_event_code" : "TEST5465"
    }';
    echo $submitJson . "<br><br>";

    $pixelId = "532314851843366";

    // ------------------------------------------------
    // Set the Facebook Conversions API URL
    $url = "https://graph.facebook.com/v12.0/" . $pixelId . "/events";
    //echo $url;

    // ------------------------------------------------
    // Use cURL to send the POST request
    //include './inc/objects/curl.class.php';
    //include 'vendor/fb_conversions/inc/objects/curl.class.php';
    //include 'inc/objects/curl.class.php';
    $_curl_ = new CurlServer();
    $_curl_->post_request($url, $submitJson);
    unset($_curl_);

    return $eventId;
}