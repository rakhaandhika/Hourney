<?php
    session_start();
    include 'lib/library.php';

    function base_url (){
        return "http://localhost/hourney";
        
    }

    function cekLogin(){
        $nik = @$_SESSION['nik'];
        $nama = @$_SESSION['nama'];

        if (empty($nik) AND empty($nama)) {
            header("location:login.php");
        }
    }

    function sudahLogin(){
        $nik = @$_SESSION['nik'];
        $nama = @$_SESSION['nama'];

        if (!empty($nik) AND !empty($nama)) {
            header("location:login.php");
        }
    }

    function register($data){
      global $mysqli;

      $nik = $data["nik"];
      $nama = $data["nama"];


      mysqli_query($mysqli, "INSERT INTO user(nik, nama) VALUES('$nik', '$nama')");

      return mysqli_affected_rows($mysqli);
      
    }
    