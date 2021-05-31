<?php
    require "truyvanData.php";
    $mMSL  =     $_POST['pMSL'];
    $mThu  =     $_POST['pThu'];
    $mSang1  =     $_POST['pSang1'];
    $mSang2  =     $_POST['pSang2'];
    $mSang3  =     $_POST['pSang3'];
    $mSang4  =     $_POST['pSang4'];
    $mSang5  =     $_POST['pSang5'];
    $mChieu1  =     $_POST['pChieu1'];
    $mChieu2  =     $_POST['pChieu2'];
    $mChieu3  =     $_POST['pChieu3'];
    $mChieu4  =     $_POST['pChieu4'];
    $mChieu5  =     $_POST['pChieu5'];
    $mIDUpSet  =     $_POST['pUpSet'];

    
    // $mMSL  =     1;
    // $mThu  =     2;
    // $mSang1  =     "Toán";
    // $mSang2  =     "Văn";
    // $mSang3  =     "GDCD";
    // $mSang4  =     "TD";
    // $mSang5  =     "Học";
    // $mChieu1  =     "Anh";
    // $mChieu2  =     "Hóa";
    // $mChieu3  =     "Địa";
    // $mChieu4  =     "Lý";
    // $mChieu5  =     "Sử";
    // $mIDUpSet  =     17;
    
    //<0  tức id chưa tồn tại ta up mới 1 tkb
    if($mIDUpSet < 0){
        $Chen = "INSERT INTO thoikhoabieu  VALUES (NULL, '$mMSL', '$mThu', '$mSang1', '$mSang2', '$mSang3', '$mSang4', '$mSang5', '$mChieu1', '$mChieu2', '$mChieu3', '$mChieu4', '$mChieu5')";
        if(mysqli_query($KetNoi, $Chen)){
            echo "Success";
        }else echo "Error";

    }
    else{
        $Update = "UPDATE thoikhoabieu SET dSang1 = '$mSang1', dSang2 = '$mSang2', dSang3 = '$mSang3', dSang4 = '$mSang4', dSang5 = '$mSang5', dChieu1 = '$mChieu1', dChieu2 = '$mChieu2', dChieu3 = '$mChieu3', dChieu4 = '$mChieu4', dChieu5 = '$mChieu5' WHERE dID = '$mIDUpSet'";
        if(mysqli_query($KetNoi, $Update)){
            echo "Success";
        }else echo "Error";
    }
?>

