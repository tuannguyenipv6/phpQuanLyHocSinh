<?php
    require "truyvanData.php";
    $mID         =       $_POST['pID'];
    $mValue       =       $_POST['pValue'];
    $mCheck       =       $_POST['pCheck'];


    $result = "ERROR";


    if($mCheck == 1){
        $Chen = "UPDATE hocsinh SET dLinkfb = '$mValue' WHERE dID = '$mID'";
        if(mysqli_query($KetNoi, $Chen)){
            $result = "Success";
        }else $result = "ERROR";
    }else{
        $Chen = "UPDATE hocsinh SET dGhiChu = '$mValue' WHERE dID = '$mID'";
        if(mysqli_query($KetNoi, $Chen)){
            $result = "Success";
        }else $result = "ERROR";
    }


    echo $result;
?>