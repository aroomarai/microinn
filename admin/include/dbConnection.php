<?php
    
    function getDbConnection() {
        $userName = 'root';
        $password = 'root';
        $serverName = 'localhost';
        $dbName = 'microinn';

        $conn = mysqli_connect($serverName, $userName, $password, $dbName);
        if(mysqli_connect_errno())
        {
            echo "failed to connect to mysqli:".mysqli_connect_error();
        }
        return $conn;
    }

?>