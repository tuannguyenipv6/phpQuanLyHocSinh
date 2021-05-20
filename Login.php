<?php
    require "truyvanData.php";
    $mTaiKhoan  =       $_POST['pTaiKhoan'];
    $mMatKhau   =      $_POST['pMatKhau'];

    $TruyVan = "SELECT * FROM user WHERE FIND_IN_SET('$mTaiKhoan', pTaiKhoan) AND FIND_IN_SET('$mMatKhau', pMatKhau)";//truy vấn vào bảng data
    //chứa dữ liệu vào 1 biến
    $data = mysqli_query($KetNoi, $TruyVan);
    $result = array("TaiKhoan" => "ERROR TKMK");
    if($data){
        while($dong = mysqli_fetch_assoc($data)){
            if($dong["pGVPH"] == 1){
                $GVPH = true;
            }else $GVPH = false;
            $result = array("TaiKhoan" =>$dong["pTaiKhoan"], 
                            "MatKhau" => $dong["pMatKhau"], 
                            "MSL" => $dong["pMSL"],
                            "GV_PH" => $GVPH, 
                            "QMK" => $dong["pQMK"]);
        }
    }else{
        $result = array("TaiKhoan" => "ERROR");
    }
    echo json_encode($result);
?>