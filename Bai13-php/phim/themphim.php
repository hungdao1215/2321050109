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
        .i-text select,
        .i-text textarea{
            width: 100%;
            margin: 10px 0;
            padding: 5px 0;
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
        select{
            padding: 5px 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Thêm phim</h1>
    <form class="khoi" action="index.php?page_layout=themphim" method="POST" enctype="multipart/form-data">
        <div class="i-text">
            <input type="text" name="ten_phim" placeholder="Tên phim">
        </div>
        <div class="i-text">
            <input type="text" name="quoc_gia" placeholder="Quốc gia">
        </div>
        <div class="i-text">
            <?php
                $sqlTheLoai = "SELECT * FROM the_loai";
                $resultTheLoai = mysqli_query($conn, $sqlTheLoai);
                $sqlDaoDien = "SELECT * FROM dao_dien";
                $resultDaoDien = mysqli_query($conn, $sqlDaoDien);
            ?>
            <select name="the_loai_id">
                <?php
                    while ($row = mysqli_fetch_array($resultTheLoai)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['ten_the_loai']; ?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="i-text">
            <select name="dao_dien_id">
                <?php
                    while ($row = mysqli_fetch_array($resultDaoDien)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['ho_ten']; ?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="i-text">
            <input type="date" name="nam" placeholder="Năm">
        </div>
        <div class="i-text">
            <input type="number" name="do_tuoi" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="mo_ta" placeholder="Mô tả">
        </div>
        <div class="i-text">
            <input type="text" name="trailer" placeholder="Đường dẫn trailer">
        </div>
        <div class="i-text">
            <input type="file" name="fileToUpload" accept="image/*">
        </div>
        <button>Thêm</button>
    </form>
<?php
    if(isset($_POST['ten_phim']) &&
       isset($_POST['quoc_gia']) &&
       isset($_POST['dao_dien_id']) &&
       isset($_POST['nam']) &&
       isset($_POST['do_tuoi']) &&
       isset($_POST['mo_ta']) &&
       isset($_POST['the_loai_id']) &&
       isset($_POST['trailer']))
    {
        $tenPhim = $_POST['ten_phim'];
        $quocGia = $_POST['quoc_gia'];
        $daoDien =$_POST['dao_dien_id'];
        $nam = $_POST['nam'];
        $doTuoi =$_POST['do_tuoi'];
        $moTa = $_POST['mo_ta'];
        $theLoai = $_POST['the_loai_id'];
        $trailer = $_POST['trailer'];
        
        #########Bắt đầu xử lý thêm ảnh
                // Xử lý ảnh
                $target_dir = "upload/";
                $uploadOk = 1;
                $target_file = "";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        $uploadOk = 1;
                    } else {
                        echo "File không phải là ảnh.";
                        $uploadOk = 0;
                    }

                    // Kiểm tra nếu file đã tồn tại
                    if (file_exists($target_file)) {
                        echo "File này đã tồn tại trên hệ thông";
                        $uploadOk = 0;
                    }

                    // Cho phép các định dạng file ảnh nhất định
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
                        $uploadOk = 0;
                    }

                    if ($uploadOk == 1 && !move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "Không thể tải ảnh lên.";
                        $uploadOk = 0;
                    }
                } else {
                    echo "Vui lòng chọn ảnh poster.";
                    $uploadOk = 0;
                }
                
                #########Kết thúc xử lý ảnh
        if(!empty($tenPhim) &&
           !empty($quocGia) &&
           !empty($daoDien) &&
           !empty($nam) &&
           !empty($doTuoi) &&
           !empty($moTa) &&
           !empty($theLoai) &&
           !empty($trailer) &&
           $uploadOk == 1)
        {
            $sql = "INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`, `trailer`, `poster_url`)
                VALUES ('$tenPhim', '$quocGia', '$daoDien', '$nam', '$doTuoi', '$moTa', '$trailer', '$target_file')";
            $result = mysqli_query($conn, $sql);

            if($result){
                $phimId = mysqli_insert_id($conn);
                $sqlTheLoai = "INSERT INTO `phim_the_loai`(`phim_id`, `the_loai_id`) VALUES ('$phimId', '$theLoai')";
                mysqli_query($conn, $sqlTheLoai);
                echo '<script>window.location.replace("index.php?page_layout=phim");</script>';
            }else{
                echo "<p style='color: red'>Thêm phim thất bại</p>";
            }
        }else{
            echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
        }
    }
?>
</body>
</html>
