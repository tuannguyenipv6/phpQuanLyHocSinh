<?php
    require "truyvanData.php";
    $mKey_ID  =       $_POST['pKey_ID'];

    $TruyVan = "SELECT * FROM bangdiemhs WHERE FIND_IN_SET('$mKey_ID', dKey_ID)";
    $data = mysqli_query($KetNoi, $TruyVan);
    $Check = 0;
    if($data){
        while($dong = mysqli_fetch_assoc($data)){
            $Check = 1;
            break;
        }
    }else{
        $result = "ERROR";
    }
    if($Check == 1){
        $result = "Success";
    }else $result = "NotBanDiem";
    echo $result;
?>