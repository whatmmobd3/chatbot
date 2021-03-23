<?php
namespace Zalo;

use Zalo\Builder\MessageBuilder;
use Zalo\ZaloEndPoint;

class ZaloSdkTest{
    function API($accessToken) {
        $msgBuilder = new MessageBuilder('text');
        $msgBuilder->withUserId('494021888309207992');
        $msgBuilder->withText('Message Text');
        $msgText = $msgBuilder->build();

        // goi api
        $response = $this->zalo->post(ZaloEndPoint::API_OA_SEND_MESSAGE, $accessToken, $msgText);
        echo '<br><br>';
        // lay du lieu tra ve
        print_r($response->getDecodedBody());
        echo '<br><br>';
        // return $response->getDecodedBody();
        }
    }
    $API = new API;
    header('Content-Type: application/json');
    echo $API ->API('EA2Aus71pe4wUxIJP4Sv')

?>