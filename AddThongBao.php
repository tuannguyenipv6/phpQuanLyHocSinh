<?php
    require "truyvanData.php";
    $mMSL  =     $_POST['pMSL'];
    $mGV_Truong   =     $_POST['pGV_Truong'];
    $mTenTB       =     $_POST['pTenTB'];
    $mNoiDungTB      =     $_POST['pNoiDungTB'];
    $mNgay       =     $_POST['pNgay'];
    $Check       =     $_POST['pCheck'];

    $result = "Error";
    if($Check < 0){
        $Chen = "INSERT INTO thongbao VALUE(null, '$mMSL', '$mGV_Truong', '$mTenTB', '$mNoiDungTB', '$mNgay')";
        if(mysqli_query($KetNoi, $Chen)){
            $result = "Success";
        }else $result = "Error";
    }else {
        $Update = "UPDATE thongbao SET dTenTB = '$mTenTB', dNoiDungTB	= '$mNoiDungTB' WHERE dID  = '$Check'";
        if(mysqli_query($KetNoi, $Update)){
            $result = "Success";
        }else $result = "Error";
    }      
    echo $result;    
?>