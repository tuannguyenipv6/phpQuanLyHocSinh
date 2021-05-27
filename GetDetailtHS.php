<?php
    require "truyvanData.php";
    $mID  =       $_POST['pID'];
    $Check = 0;
    $TruyVan = "SELECT * FROM hocsinh WHERE FIND_IN_SET('$mID', dID)";
    //chứa dữ liệu vào 1 biến
    $data = mysqli_query($KetNoi, $TruyVan);
    if($data){
        while($dong = mysqli_fetch_assoc($data)){
            if($dong["dGioiTinh"] == 1){
                $GT = true;
            }else $GT = false;
            $result = array("ID" =>$dong["dID"], 
                            "HoTen" => $dong["dHoTen"],
                            "MSHS" => $dong["dMSHS"],
                            "NamSinh" => $dong["dNamSinh"],
                            "GioiTinh" => $GT,
                            "DanToc" => $dong["dDanToc"],
                            "NoiSinh" => $dong["dNoiSinh"],
                            "ChucVu" => $dong["dChucVu"],
                            "SdtPh" => $dong["dSdtPh"],
                            "LinkPhoto" => $dong["dLinkPhoto"],
                            "Linkfb" => $dong["dLinkfb"],
                            "GhiChu" => $dong["dGhiChu"]
                        );
                        $Check = 1;
        }
    }else{
        $result = array("ID" => -1, 
                            "HoTen" => "Lỗi Truy Vấn!!!",
                            "MSHS" => 0,
                            "NamSinh" => 0,
                            "GioiTinh" => true,
                            "DanToc" => "Error",
                            "NoiSinh" => "Error",
                            "ChucVu" => "Error",
                            "SdtPh" => "Error",
                            "LinkPhoto" => "ErrorPhoto",
                            "Linkfb" => "ErrorFB",
                            "GhiChu" => "Error"
                        );
    }
    if($Check == 0){
        $result = array("ID" => -1, 
                            "HoTen" => "Lỗi Truy Vấn!!!",
                            "MSHS" => 0,
                            "NamSinh" => 0,
                            "GioiTinh" => true,
                            "DanToc" => "Error",
                            "NoiSinh" => "Error",
                            "ChucVu" => "Error",
                            "SdtPh" => "Error",
                            "LinkPhoto" => "ErrorPhoto",
                            "Linkfb" => "ErrorFB",
                            "GhiChu" => "Error"
                        );
    }
    echo json_encode($result);
?>