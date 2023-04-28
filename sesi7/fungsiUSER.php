<?php
    function registerUSER($nama, $email, $user, $pass){
        $spn = "Insert data gagal";
        $iduser = md5($email);
        $sql = "INSERT INTO tbUSER(nama, email, username, passkey, iduser) 
        VALUES(
            '$nama', 
            '$email', 
            '$user', 
            '$pass', 
            '$iduser'
        );";
            
        $cnn =  mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
        if($cnn){
            $hsl = mysqli_query($cnn, $sql);
            if($hsl){
                $psn = "Insert data sukses";

            
            }
        }
        return $psn;
    }