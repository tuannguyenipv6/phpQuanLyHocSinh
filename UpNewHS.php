<?php
    require "truyvanData.php";

    $mMSL            =     $_POST['pMSL'];
    $mHoTen           =     $_POST['pHoTen'];
    $mMSHS            =     $_POST['pMSHS'];
    $mNamSinh         =     $_POST['pNamSinh'];
    $mGioiTinh        =     $_POST['pGioiTinh'];
    $mDanToc          =     $_POST['pDanToc'];
    $mNoiSinh         =     $_POST['pNoiSinh'];
    $mChucVu          =     $_POST['pChucVu'];
    $mSdtPh           =     $_POST['pSdtPh'];
    $mLinkPhoto       =     $_POST['pLinkPhoto'];

    $mLinkFB          =     "chuaco";
    $mGhiChu          =     "trống";

    $Check = false;
    if($mGioiTinh == 1){
        $Check = true;
    }

    $Chen = "INSERT INTO hocsinh VALUE(null, '$mMSL', '$mHoTen', '$mMSHS', '$mNamSinh', '$Check', '$mDanToc', '$mNoiSinh', '$mChucVu', '$mSdtPh', '$mLinkPhoto', '$mLinkFB', '$mGhiChu')";
    if(mysqli_query($KetNoi, $Chen)){
        echo "Success";
    }else echo "Error";
?>