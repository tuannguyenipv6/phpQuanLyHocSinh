<?php
    require "truyvanData.php";
    $mKey_ID  =     $_POST['pKey_ID'];
    
    $Delete = "DELETE FROM thongbao WHERE dID = '$mKey_ID'";
    $data = mysqli_query($KetNoi, $Delete);
    if($data){
        $result = "Success";
    }else $result = "Error";
    echo $result;
?>