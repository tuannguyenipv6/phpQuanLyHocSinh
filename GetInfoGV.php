<?php
    require "truyvanData.php";
    $mMSL  =       $_POST['pMSL'];

    $TruyVan = "SELECT * FROM infodefault WHERE FIND_IN_SET('$mMSL', dMSL)";//truy vấn vào bảng data
    //chứa dữ liệu vào 1 biến
    $data = mysqli_query($KetNoi, $TruyVan);
    $result = array("Name" => "ERROR");
    if($data){
        while($dong = mysqli_fetch_assoc($data)){
            if($dong["dMSL"] == $mMSL){
                $result = array("Photo1" =>$dong["dPhoto1"], 
                            "Name" => $dong["dName"], 
                            "Gmail" => $dong["dMail"],
                            "Photo2" => $dong["dPhoto2"], 
                            "SDT" => $dong["dSDT"],
                            "TenLop" => $dong["dTenLop"]);
            }
        }
    }else{
        $result = array("Name" => "ERROR");
    }
    echo json_encode($result);
?>