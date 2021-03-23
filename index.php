<?php
    class API {
        function Select() {
            $users = 'git hub';
           return json_encode($users);
        }
    }
    $API = new API;
    header('Content-Type: application/json');
    echo $API ->Select()
?>