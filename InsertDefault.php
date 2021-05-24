<?php
    require "truyvanData.php";

    $mMSL     =     $_POST['pMSL'];
    $mPhoto1     =     $_POST['pPhoto1'];
    $mName       =     $_POST['pName'];
    $mMail       =     $_POST['pMail'];
    $mPhoto2     =     $_POST['pPhoto2'];
    $mSDT     =     $_POST['pSDT'];
    $Info     =     $_POST['Info'];

    if($Info == 1){
        $TruyVan = "SELECT * FROM infodefault";
        $data = mysqli_query($KetNoi, $TruyVan);
        $check = 0;
        while($dong = mysqli_fetch_assoc($data)){
            if($mMSL == $dong['dMSL']){
                echo "OKROI";
                $check = 1;
                break;
            }
        }
        if($check == 0){
            $Chen = "INSERT INTO infodefault VALUE('$mMSL', '$mPhoto1', '$mName', '$mMail', '$mPhoto2', '$mSDT')";
            if(mysqli_query($KetNoi, $Chen)){
                echo "Success";
            }else echo "Error";
        }
    }
?>