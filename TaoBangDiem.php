<?php
    require "truyvanData.php";

    $mKeyID                =     $_POST['pKey_ID'];


    $Chen1 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Toán Học')";
    $Chen2 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Ngữ Văn')";
    $Chen3 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Vật Lý')";
    $Chen4 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Hóa Học')";
    $Chen5 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Lịch Sử')";
    $Chen6 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Địa Lý')";
    $Chen7 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Sinh Học')";
    $Chen8 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Ngoại Ngữ')";
    $Chen9 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'GDCD')";
    $Chen10 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Công Nghệ')";
    $Chen11 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Tin Học')";
    $Chen12 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'GDQP')";
    $Chen13 = "INSERT INTO bangdiemhs (dKey_ID, dTenMonHoc) VALUES ('$mKeyID', 'Thể Dục')";

    if(mysqli_query($KetNoi, $Chen1) && 
        mysqli_query($KetNoi, $Chen2) && 
        mysqli_query($KetNoi, $Chen3) && 
        mysqli_query($KetNoi, $Chen4) && 
        mysqli_query($KetNoi, $Chen5) && 
        mysqli_query($KetNoi, $Chen6) && 
        mysqli_query($KetNoi, $Chen7) && 
        mysqli_query($KetNoi, $Chen8) && 
        mysqli_query($KetNoi, $Chen9) && 
        mysqli_query($KetNoi, $Chen10) && 
        mysqli_query($KetNoi, $Chen11) && 
        mysqli_query($KetNoi, $Chen12) && 
        mysqli_query($KetNoi, $Chen13)){
        echo "Success";
    }else echo "Error";
        
?>