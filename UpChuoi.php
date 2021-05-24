<?php
    require "truyvanData.php";
    // $mMSL     =     $_POST['pMSL'];
    // $mChuoi     =     $_POST['pChuoi'];
    $mMSL       =     $_POST['pMSL'];
    $mValue     =      $_POST['pValue'];
    $mIn        =      $_POST['pIn'];

    $Chen = "UPDATE infodefault SET $mIn = '$mValue' WHERE dMSL = '$mMSL'";
    if(mysqli_query($KetNoi, $Chen)){
        echo "Success";
    }else echo "Error";
?>