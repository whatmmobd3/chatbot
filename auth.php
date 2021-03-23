<?php
session_start();
// Received callback data from oauth.zaloapp.com/v3/auth
if ( isset($_GET['uid']) && isset($_GET['code']) && isset($_GET['state']) ) :
    // Obtain the Access Token by performing a GET request to
    // https://oauth.zalo.com/v3/access_token
    $url = "https://oauth.zaloapp.com/v3/access_token?"
          . http_build_query( array(
                "app_id" => "{3799894204854887828}", // <- App ID
                "app_secret" => "{EA2Aus71pe4wUxIJP4Sv}", // <- App Secret
                "code" => $_GET['code'] // <- oAuthCode
        ) );
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_SSL_VERIFYPEER => true
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    // Store the User Access Token
    $r = json_decode($response);
    $_SESSION["6Q75B3ByNBIf564ZsSEK"] = $r->access_token;
    // Go back to index.php
    header("Location: /index.php");
endif;

?>