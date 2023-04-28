<?php
    include("konfigurasi.php");

    $s_db = "CREATE TABLE tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35), 
        email VARCHAR(255),
        username VARCHAR(10), 
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    ); ";
    echo "SQL: ".$s_db."<br>";
    
    //koneksi ke DBMS mysql
   $cnn =  mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
   if($cnn){
    echo "koneksi ke DBMS mysql sukses<br>";
    $hsl = mysqli_query($cnn, $s_db);
    if($hsl){
        echo "membuat table tbUSER sukses<br>";
    }
    else{
        echo "membuat table tbUSER gagal<br>";
    }
    
   }else{
    echo "koneksi ke DBMS mysql gagal<br>";
   }