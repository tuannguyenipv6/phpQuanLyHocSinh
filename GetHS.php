<?php
    require "truyvanData.php";
    $mMSL  =       $_POST['pMSL'];
    // $mMSL  =      123245;
    $MangHS = array();
    $Check = 0;

    $TruyVan = "SELECT * FROM hocsinh WHERE FIND_IN_SET('$mMSL', dMSL)";
    //chứa dữ liệu vào 1 biến
    $data = mysqli_query($KetNoi, $TruyVan);
    if($data){
        while($dong = mysqli_fetch_assoc($data)){
            if($dong["dGioiTinh"] == 1){
                $GT = true;
            }else $GT = false;
            $result = array("ID" =>$dong["dID"], 
                            "HoTen" => $dong["dHoTen"],
                            "GioiTinh" => $GT,
                            "ChucVu" => $dong["dChucVu"],
                            "LinkPhoto" => $dong["dLinkPhoto"]
                        );
            array_push($MangHS, $result);
            $Check = 1;
        }
    }else{
        $result = array("ID" => -1, 
                            "HoTen" => "ERROR",
                            "GioiTinh" => true,
                            "ChucVu" => "ERROR",
                            "LinkPhoto" => "matdinhnam"
                        );
        array_push($MangHS, $result);
    }
    
    if($Check == 0){
        $result = array("ID" => -1, 
                            "HoTen" => "Chưa có thông tin",
                            "GioiTinh" => true,
                            "ChucVu" => "Mã số lớp của bạn hiện chưa có thông tin HS nào!!!",
                            "LinkPhoto" => "matdinhnam"
                        );
        array_push($MangHS, $result);
        echo json_encode($MangHS);
    }else{
        echo json_encode($MangHS);
    }
?>