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
    <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM nguoi_dung WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        $nguoidung = mysqli_fetch_assoc($result);
    ?>
    <h1>Cập nhật tài khoản</h1>
    <form class="khoi" action="index.php?page_layout=capnhattaikhoan&id=<?php echo $id ?>" method="POST">
        <div class="i-text">
            <input type="text" name="tenDangNhap" value=<?php echo $nguoidung['ten_dang_nhap'] ?> id="" placeholder="Tên đăng nhập">
        </div>
        <div class="i-text">
            <input type="password" name="matKhau" value=<?php echo $nguoidung['mat_khau'] ?> id="" placeholder="Mật khẩu">
        </div>
        <div class="i-text">
            <input type="email" name="email" value=<?php echo $nguoidung['email'] ?> id="" placeholder="Email">
        </div>
        <div class="i-text">
            <input type="text" name="hoTen" value=<?php echo $nguoidung['ho_ten'] ?> id="" placeholder="Họ tên">
        </div>
        <div class="i-text">
            <input type="date" name="ngaySinh" value=<?php echo $nguoidung['ngay_sinh'] ?> id="" placeholder="Ngày sinh">
        </div>
        <div class="i-text">
            <input type="text" name="sdt" value=<?php echo $nguoidung['so_dien_thoai'] ?> id="" placeholder="Số điện thoại">
        </div>
        <div class="">
            <input type="radio" name="gioiTinh" id="" value="1" <?php $nguoidung['gioi_tinh']==true?"checked":""?>> Nam
            <input type="radio" name="gioiTinh" id="" value="0" <?php !$nguoidung['gioi_tinh']==true?"checked":""?>> Nữ
        </div>
        <button>Cập nhật</button>
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
                $sql = "UPDATE nguoi_dung SET
                    ten_dang_nhap='$tenDangNhap',
                    mat_khau='$matKhau',
                    email='$email',
                    ho_ten='$hoTen',
                    so_dien_thoai='$sdt',
                    gioi_tinh='$gioiTinh',
                    ngay_sinh='$ngaySinh'
                WHERE id='$id'";
                $result = mysqli_query($conn, $sql);

                if($result){
                    header("Location: index.php?page_layout=taikhoan");    
                }
                else{
                    echo "Cập nhật người dùng thất bại";
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