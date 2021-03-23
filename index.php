<?php
namespace Zalo;

use Zalo\ZaloEndPoint;

class ZaloSdkTest{
    protected static $instance;
    protected $zalo;
    protected $helper;

    function sendMessage() {
        $cookie_name = "EA2Aus71pe4wUxIJP4Sv";
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            $accessToken = $_COOKIE[$cookie_name];
            $params = ['message' => 'Test function gui tin qua OA', 'to' => '6870335006918372741', 'link' => 'https://developers.zalo.me'];
            $response = $this->zalo->post(ZaloEndPoint::API_GRAPH_MESSAGE, $accessToken, $params);
            echo '<br><br>';
            print_r($response->getDecodedBody());
            echo '<br><br>';
        }
        return $cookie_name;
    }
    }
    $sendMessage = new sendMessage();
    header('Content-Type: application/json');
    echo $sendMessage ->sendMessage()

?>