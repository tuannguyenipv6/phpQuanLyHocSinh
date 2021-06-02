<?php
    require "truyvanData.php";
    $mKey_ID  =     $_POST['pKey_ID'];
    $mD_Mieng  =     $_POST['pD_Mieng'];
    $mD_15p  =     $_POST['pD_15p'];
    $mD_1Tiet  =     $_POST['pD_1Tiet'];
    $mD_HocKy  =     $_POST['pD_HocKy'];

    $Update = "UPDATE bangdiemhs SET dD_Mieng = '$mD_Mieng', dD_15p = '$mD_15p', dD_1Tiet = '$mD_1Tiet', dD_HocKy = '$mD_HocKy' WHERE dID = '$mKey_ID' ";
    if(mysqli_query($KetNoi, $Update)){
        echo "Success";
    }else echo "Error";
?>