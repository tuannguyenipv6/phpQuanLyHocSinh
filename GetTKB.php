<?php
    require "truyvanData.php";
    // $mMSL  =       $_POST['pMSL'];

    $mMSL  =       3639;

    $MangHS = array();

    $Check2 = 1;
    $Check3 = 1;
    $Check4 = 1;
    $Check5 = 1;
    $Check6 = 1;
    $Check7 = 1;
    $Check8 = 1;

    $TruyVan = "SELECT * FROM thoikhoabieu WHERE FIND_IN_SET('$mMSL', dMSL)";
    //chứa dữ liệu vào 1 biến
    $data = mysqli_query($KetNoi, $TruyVan);
    if($data){
        while($dong = mysqli_fetch_assoc($data)){
        
            if($dong["dThu"] == 2){
                $result = array("ID" =>$dong["dID"], 
                            "Thu" => $dong["dThu"],
                            "Sang1" => $dong["dSang1"],
                            "Sang2" => $dong["dSang2"],
                            "Sang3" => $dong["dSang3"],
                            "Sang4" => $dong["dSang4"],
                            "Sang5" => $dong["dSang5"],
                            "Chieu1" => $dong["dChieu1"],
                            "Chieu2" => $dong["dChieu2"],
                            "Chieu3" => $dong["dChieu3"],
                            "Chieu4" => $dong["dChieu4"],
                            "Chieu5" => $dong["dChieu5"]);
                            $Check2 = 2;
                            array_push($MangHS, $result);
            }
            if($dong["dThu"] == 3){
                $result = array("ID" =>$dong["dID"], 
                            "Thu" => $dong["dThu"],
                            "Sang1" => $dong["dSang1"],
                            "Sang2" => $dong["dSang2"],
                            "Sang3" => $dong["dSang3"],
                            "Sang4" => $dong["dSang4"],
                            "Sang5" => $dong["dSang5"],
                            "Chieu1" => $dong["dChieu1"],
                            "Chieu2" => $dong["dChieu2"],
                            "Chieu3" => $dong["dChieu3"],
                            "Chieu4" => $dong["dChieu4"],
                            "Chieu5" => $dong["dChieu5"]);
                            $Check3 = 2;
                            array_push($MangHS, $result);
            }
            if($dong["dThu"] == 4){
                $result = array("ID" =>$dong["dID"], 
                            "Thu" => $dong["dThu"],
                            "Sang1" => $dong["dSang1"],
                            "Sang2" => $dong["dSang2"],
                            "Sang3" => $dong["dSang3"],
                            "Sang4" => $dong["dSang4"],
                            "Sang5" => $dong["dSang5"],
                            "Chieu1" => $dong["dChieu1"],
                            "Chieu2" => $dong["dChieu2"],
                            "Chieu3" => $dong["dChieu3"],
                            "Chieu4" => $dong["dChieu4"],
                            "Chieu5" => $dong["dChieu5"]);
                            $Check4 = 2;
                            array_push($MangHS, $result);
            }
            if($dong["dThu"] == 5){
                $result = array("ID" =>$dong["dID"], 
                            "Thu" => $dong["dThu"],
                            "Sang1" => $dong["dSang1"],
                            "Sang2" => $dong["dSang2"],
                            "Sang3" => $dong["dSang3"],
                            "Sang4" => $dong["dSang4"],
                            "Sang5" => $dong["dSang5"],
                            "Chieu1" => $dong["dChieu1"],
                            "Chieu2" => $dong["dChieu2"],
                            "Chieu3" => $dong["dChieu3"],
                            "Chieu4" => $dong["dChieu4"],
                            "Chieu5" => $dong["dChieu5"]);
                            $Check5 = 2;
                            array_push($MangHS, $result);
            }
            if($dong["dThu"] == 6){
                $result = array("ID" =>$dong["dID"], 
                            "Thu" => $dong["dThu"],
                            "Sang1" => $dong["dSang1"],
                            "Sang2" => $dong["dSang2"],
                            "Sang3" => $dong["dSang3"],
                            "Sang4" => $dong["dSang4"],
                            "Sang5" => $dong["dSang5"],
                            "Chieu1" => $dong["dChieu1"],
                            "Chieu2" => $dong["dChieu2"],
                            "Chieu3" => $dong["dChieu3"],
                            "Chieu4" => $dong["dChieu4"],
                            "Chieu5" => $dong["dChieu5"]);
                            $Check6 = 2;
                            array_push($MangHS, $result);
            }
            if($dong["dThu"] == 7){
                $result = array("ID" =>$dong["dID"], 
                            "Thu" => $dong["dThu"],
                            "Sang1" => $dong["dSang1"],
                            "Sang2" => $dong["dSang2"],
                            "Sang3" => $dong["dSang3"],
                            "Sang4" => $dong["dSang4"],
                            "Sang5" => $dong["dSang5"],
                            "Chieu1" => $dong["dChieu1"],
                            "Chieu2" => $dong["dChieu2"],
                            "Chieu3" => $dong["dChieu3"],
                            "Chieu4" => $dong["dChieu4"],
                            "Chieu5" => $dong["dChieu5"]);
                            $Check7 = 2;
                            array_push($MangHS, $result);
            }
            if($dong["dThu"] == 8){
                $result = array("ID" =>$dong["dID"], 
                            "Thu" => $dong["dThu"],
                            "Sang1" => $dong["dSang1"],
                            "Sang2" => $dong["dSang2"],
                            "Sang3" => $dong["dSang3"],
                            "Sang4" => $dong["dSang4"],
                            "Sang5" => $dong["dSang5"],
                            "Chieu1" => $dong["dChieu1"],
                            "Chieu2" => $dong["dChieu2"],
                            "Chieu3" => $dong["dChieu3"],
                            "Chieu4" => $dong["dChieu4"],
                            "Chieu5" => $dong["dChieu5"]);
                            $Check8 = 2;
                            array_push($MangHS, $result);
            }
        }
    }else{
        $result = array("Sang1" => "ERROR ERROR");
        array_push($MangHS, $result);
    }

    if($Check2 == 1){
        $result = array("ID" => -1, "Thu" => 2,
        "Sang1" => "",
        "Sang2" => "",
        "Sang3" => "",
        "Sang4" => "",
        "Sang5" => "",
        "Chieu1" => "",
        "Chieu2" => "",
        "Chieu3" => "",
        "Chieu4" => "",
        "Chieu5" => "");
        array_push($MangHS, $result);
    }

    if($Check3 == 1){
        $result = array("ID" => -1, "Thu" => 3,
        "Sang1" => "",
        "Sang2" => "",
        "Sang3" => "",
        "Sang4" => "",
        "Sang5" => "",
        "Chieu1" => "",
        "Chieu2" => "",
        "Chieu3" => "",
        "Chieu4" => "",
        "Chieu5" => "");
        array_push($MangHS, $result);
    }

    if($Check4 == 1){
        $result = array("ID" => -1, "Thu" => 4,
        "Sang1" => "",
        "Sang2" => "",
        "Sang3" => "",
        "Sang4" => "",
        "Sang5" => "",
        "Chieu1" => "",
        "Chieu2" => "",
        "Chieu3" => "",
        "Chieu4" => "",
        "Chieu5" => "");
        array_push($MangHS, $result);
    }

    if($Check5 == 1){
        $result = array("ID" => -1, "Thu" => 5,
        "Sang1" => "",
        "Sang2" => "",
        "Sang3" => "",
        "Sang4" => "",
        "Sang5" => "",
        "Chieu1" => "",
        "Chieu2" => "",
        "Chieu3" => "",
        "Chieu4" => "",
        "Chieu5" => "");
        array_push($MangHS, $result);
    }

    if($Check6 == 1){
        $result = array("ID" => -1, "Thu" => 6,
        "Sang1" => "",
        "Sang2" => "",
        "Sang3" => "",
        "Sang4" => "",
        "Sang5" => "",
        "Chieu1" => "",
        "Chieu2" => "",
        "Chieu3" => "",
        "Chieu4" => "",
        "Chieu5" => "");
        array_push($MangHS, $result);
    }

    if($Check7 == 1){
        $result = array("ID" => -1, "Thu" => 7,
        "Sang1" => "",
        "Sang2" => "",
        "Sang3" => "",
        "Sang4" => "",
        "Sang5" => "",
        "Chieu1" => "",
        "Chieu2" => "",
        "Chieu3" => "",
        "Chieu4" => "",
        "Chieu5" => "");
        array_push($MangHS, $result);
    }

    if($Check8 == 1){
        $result = array("ID" => -1, "Thu" => 8,
        "Sang1" => "",
        "Sang2" => "",
        "Sang3" => "",
        "Sang4" => "",
        "Sang5" => "",
        "Chieu1" => "",
        "Chieu2" => "",
        "Chieu3" => "",
        "Chieu4" => "",
        "Chieu5" => "");
        array_push($MangHS, $result);
    }

    
    echo json_encode($MangHS);
?>