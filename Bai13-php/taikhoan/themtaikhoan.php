<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        .i-text input{
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }
        button{
            padding: 5px 0;
            width: 100%;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Thêm tài khoản</h1>
    <form class="khoi" action="index.php?page_layout=themtaikhoan" method="POST">
        <div class="i-text">
            <input type="text" name="tenDangNhap" id="" placeholder="Tên đăng nhập">
        </div>
        <div class="i-text">
            <input type="password" name="matKhau" id="" placeholder="Mật khẩu">
        </div>
        <div class="i-text">
            <input type="email" name="email" id="" placeholder="Email">
        </div>
        <div class="i-text">
            <input type="text" name="hoTen" id="" placeholder="Họ tên">
        </div>
        <div class="i-text">
            <input type="date" name="ngaySinh" id="" placeholder="Ngày sinh">
        </div>
        <div class="i-text">
            <input type="text" name="sdt" id="" placeholder="Số điện thoại">
        </div>
        <div class="">
            <input type="radio" name="gioiTinh" id="" value="1" checked> Nam
            <input type="radio" name="gioiTinh" id="" value="0"> Nữ
        </div>
        <button>Thêm</button>
    </form>
    <?php
     if(   isset($_POST['tenDangNhap']) && 
           isset($_POST['matKhau']) && 
           isset($_POST['email']) && 
           isset($_POST['hoTen']) &&
           isset($_POST['ngaySinh']) &&
           isset($_POST['sdt']) &&
           isset($_POST['gioiTinh']))
        {
        $tenDangNhap = $_POST['tenDangNhap'];
        $matKhau = $_POST['matKhau'];
        $email = $_POST['email'];
        $hoTen = $_POST['hoTen'];
        $ngaySinh = $_POST['ngaySinh'];
        $sdt = $_POST['sdt'];   
        $gioiTinh = $_POST['gioiTinh'];
        if( !empty($tenDangNhap) &&
            !empty($matKhau) &&
            !empty($email) &&
            !empty($hoTen) &&
            !empty($ngaySinh) &&
            !empty($sdt)){
                //Người dùng nhập đủ thông tin
                $sql = "INSERT INTO `nguoi_dung`(`ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) 
                VALUES ('$tenDangNhap','$matKhau','$email','$hoTen','$ngaySinh','$sdt','$gioiTinh')";

                $result = mysqli_query($conn, $sql);

                if($result){
                    header("Location: index.php?page_layout=taikhoan");
                }
                else{
                    echo "Thêm người dùng thất bại";
                }
            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }

    ?>
</body>
</html>