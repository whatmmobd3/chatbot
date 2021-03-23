<?php
require_once __DIR__ . '/vendor/autoload.php';
    class API {
        function Select() {
            $users = '[{ "name":"PHP", "desc":"chatbot" }]';
            return json_decode($users);
        }
    }
    $API = new API;
    header('Content-Type: application/json');
    echo $API ->Select()
?>