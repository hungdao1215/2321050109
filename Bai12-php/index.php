<?php
    //Nội dung php đặt ở vị trí này
    echo "Hello world! <br>";
    //Biến: $Tên biến = giá trị;
    $hoTen = "Hung Dao";
    $tuoi = 21;
    //Để nối chuỗi trong php dùng dấu .
    echo $hoTen . " " .$tuoi . "<br>";

    //strlen() Độ dài chuỗi
    echo strlen($hoTen) . "<br>";

    //Đếm số từ
    echo str_word_count($hoTen) . "<br>";

    //Tìm kiếm kí tự trong chuỗi
    echo strpos($hoTen, "o"). "<br>";

    //Thay thế kí tự trong chuỗi
    echo str_replace("Dao", "Dinh", $hoTen) . "<br>";

    $soThuNhat = 10;
    $soThuHai = 5;
    //Phép cộng
    echo $soThuNhat + $soThuHai . "<br>";
    //- * /
    echo $soThuNhat - $soThuHai . "<br>";
    echo $soThuNhat * $soThuHai . "<br>";
    echo $soThuNhat / $soThuHai . "<br>";

    //Toán tử gán
    # += -= *= /= %=
    $soThuNhat += $soThuHai;
    echo $soThuNhat . "<br>";

    //Toán tử so sánh: == ; != ; > ; < ; >= ; <= ; ===
    echo $soThuNhat <= $soThuHai . "<br>";

    //Câu điều kiện
    // if ("Điều kiện") {
    //     logic
    // }
    // elseif("Điều kiện"){
    //     logic
    // } else {
    //     logic
    // }
    echo "<br>";

    $ketQua = $soThuNhat + $soThuHai;
    if($ketQua<15){
        echo "Tổng nhỏ hơn 15";
    }
    elseif($ketQua=15){
        echo "Tổng bằng 15";
    }
    else{
        echo "Tổng lớn hơn 15";
    }

    //Switch case
    $color = "red";
    switch($color){
        case "red":
            echo "<br>";
            echo "IS RED";
            break;
        case "blue":
            echo "<br>";
            echo "IS BLUE";
            break;  
        default:
            echo "<br>";
            echo "no color";
            break;      
    }
    echo "<br>";


    //for
    for ($i = 0; $i < 10 ; $i++){
        echo $i . "<br>";
    }
    echo "<br>";


    //Mảng
    $mang = ["Anh", "Nhat Anh", "Vu Anh"];
    //Đếm phần tử
    echo count ($mang) . "<br>";
    echo $mang[1] . "<br>";

    $mang[] = "Quang Anh";
    print_r($mang);

    #xóa
    unset($mang[3]);
    print_r ($mang);
?>