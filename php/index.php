<h1>Đây là file php</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buổi 1</title>
</head>
<body>
    <?php
        //1. cú pháp in ra màn hình
        echo "Hello world! <br>";
        echo "PHP <br>";
        //2. Biến
        // Cú pháp: $ + tên của biến = giá trị của biến
        $ten ="Hung Dao";
        $tuoi =20;

        echo "xin chào ".$ten. "  " . $tuoi . " tuổi";

        //3. Hằng
        define("soPi", "3.14");
        echo soPi . "<br>";
        //4. Phân biệt "" và ''
        echo '$ten' . "<br>";
        echo "$ten" . "<br>";
        //5. chuỗi
        #5.1 kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        #5.2 Đếm số từ
        echo str_word_count($ten) . "<br>";
        #5.3 tìm kiếm kí tự trong chuỗi
        echo strpos($ten, "n") . "<br>";
        #5.4 thay thế kí tự trong chuỗi
        echo str_replace("Dao", "Da" , $ten). "<br>";

        //6. Toán tử
        $soThuNhat = 110;
        $soThuHai = 5;
        //+ - * / %
        echo $soThuNhat + $soThuHai. "<br>";
        echo $soThuNhat % $soThuHai. "<br>";
        //7. Câu điều kiện
        //if("Điều kiện")(
        //logic
        //)
        //else(
        //logic
        //)
        //kiểm tra tổng của số thứ nhất và số thứ hai
        $tong = $soThuNhat + $soThuHai;
        if($tong<15){
            echo "Tổng nhỏ hơn 15";
        }    
        elseif($tong==15){
            echo "Tổng bằng 15";
        }    
        else{
            echo "Tổng lớn hơn 15";
        }
    ?>
</body>
</html>