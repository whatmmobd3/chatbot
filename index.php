<?php
session_start();
// If the User Access Token is not available
// perform an authorization request
if ( !isset($_SESSION["user_access_token"]) ) :
    $auth_uri = "https://oauth.zaloapp.com/v3/auth?"
               . http_build_query(array(
                     "app_id" => "{app-id}", // <- App ID
                     "redirect_uri" => "/auth.php",
                     'state' => "whatever"
                 ));
    header("Location: {$auth_uri}");
endif;

?>