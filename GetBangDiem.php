<?php
    require "truyvanData.php";
    $mKey_ID  =       $_POST['pKey_ID'];

    $TruyVan = "SELECT * FROM bangdiemhs WHERE FIND_IN_SET('$mKey_ID', dKey_ID)";
    $data = mysqli_query($KetNoi, $TruyVan);
    $Check = 0;
    $MangHS = array();
    if($data){
        while($dong = mysqli_fetch_assoc($data)){
            $result = array("ID" =>$dong["dID"], 
                            "TenMonHoc" => $dong["dTenMonHoc"], 
                            "D_Mieng" => $dong["dD_Mieng"],
                            "D_15p" => $dong["dD_15p"], 
                            "D_1Tiet" => $dong["dD_1Tiet"], 
                            "D_HocKy" => $dong["dD_HocKy"]);
            $Check = 1;
            array_push($MangHS, $result);
        }
    }else{
        $result = array("TenMonHoc" => "ERROR");
        array_push($MangHS, $result);
    }
    if($Check == 0){
        $result = array("ID" => 1, 
                            "TenMonHoc" => "ERROR", 
                            "D_Mieng" => "ERROR",
                            "D_15p" => "ERROR", 
                            "D_1Tiet" => "ERROR", 
                            "D_HocKy" => "ERROR");
            array_push($MangHS, $result);
            echo json_encode($MangHS);
    }else echo json_encode($MangHS);
?>