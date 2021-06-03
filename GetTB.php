<?php
    require "truyvanData.php";
    $mMSL  =       $_POST['pMSL'];

    $MangTB = array();
    $check = 0;

    $TruyVan = "SELECT * FROM thongbao WHERE FIND_IN_SET('$mMSL', dMSL)";
    $data = mysqli_query($KetNoi, $TruyVan);
    if($data){
        while($dong = mysqli_fetch_assoc($data)){
            $result = array("ID" =>$dong["dID"], 
                            "GV_NhaTruong" => $dong["dGV_Truong"],
                            "Ten" => $dong["dTenTB"],
                            "NoiDung" => $dong["dNoiDungTB"],
                            "NgayDang" => $dong["dNgayDang"]
                        );
            array_push($MangTB, $result);
            $check = 1;
        }
    }
    if($check == 0){
        $result = array("ID" => -1, 
                            "GV_NhaTruong" => "Sever",
                            "Ten" => "Chưa có thông báo nào",
                            "NoiDung" => "GVCN chưa có thông báo hoặc Mã Số Lớp của bạn chưa có TK GVCN quản trị!",
                            "NgayDang" => "Ngày đăng: "
                        );
        array_push($MangTB, $result);
    }
    echo json_encode($MangTB);
?>