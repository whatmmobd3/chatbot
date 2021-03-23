<?php
    class API {
        function Select() {
            $users = 'test 1';
           return json_encode($users);
        }
    }
    $API = new API;
    header('Content-Type: application/json');
    echo $API ->Select()
?>