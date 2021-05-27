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

    $mCheckID       =     $_POST['pCheckID'];

    $mLinkFB          =     "chuaco";
    $mGhiChu          =     "trống";

    if($mCheckID > 0){
        $Chen = "UPDATE hocsinh SET dHoTen = '$mHoTen', 
                                    dMSHS = '$mMSHS', 
                                    dNamSinh = '$mNamSinh',
                                    dGioiTinh = '$mGioiTinh',
                                    dDanToc = '$mDanToc',
                                    dNoiSinh = '$mNoiSinh',
                                    dChucVu	 = '$mChucVu',
                                    dSdtPh = '$mSdtPh',
                                    dLinkPhoto	 = '$mLinkPhoto'
                                    WHERE dID = '$mCheckID'";
        if(mysqli_query($KetNoi, $Chen)){
            echo "Success";
        }else echo "Error";
    }else{
        $Chen = "INSERT INTO hocsinh VALUE(null, '$mMSL', '$mHoTen', '$mMSHS', '$mNamSinh', '$mGioiTinh', '$mDanToc', '$mNoiSinh', '$mChucVu', '$mSdtPh', '$mLinkPhoto', '$mLinkFB', '$mGhiChu')";
        if(mysqli_query($KetNoi, $Chen)){
            echo "Success";
        }else echo "Error";
    }
?>